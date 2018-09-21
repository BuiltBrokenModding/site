//Various requirements
var express = require('express')
var bodyParser = require('body-parser')
var app = express()
var http = require('http').Server(app)
var mongoose = require('mongoose')
var compression = require('compression')



//Configs
var server_config = require('./config.js')


//DB
mongoose.Promise = Promise
const dbURL = `mongodb://${server_config.DB_USER}:${server_config.DB_PASS}@${server_config.DB_URL}`

//DB Models
var Project = mongoose.model('Project', {
  name: String,
  cursePath: String,
  media: Array,
  type: String, //Lib, Modpack, Mod, Utility
  authors: Array,
  releaseDate: Date,
  tags: Array,
  description: String,
  subText: String,
  image: String
})

var Announcement = mongoose.model('Announcement', {
  text: String
})

var News = mongoose.model('News', {
  title: String,
  subText: String,
  image: String,
  date: Date,
  author: String,
  body: String
})

//Connect
mongoose.connect(dbURL, {useNewUrlParser: true}, (err) => {
  console.log('mongo db connection', err)
})


//Config APP
app.use(express.static(__dirname + '/static'))
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({extended: false}))
app.use(compression())
app.set('view engine', 'pug')

//GET/POSTS

//Web
//Using name instead of IDs because SEO
app.get('/project/:name', (req, res) =>{
  Project.findOne({name: req.params.name}, (err, project) => {
    if(err)
      return res.sendStatus(500)
    if(project == null)
      return res.sendStatus(404)
    
    res.render('project-tempalte', {cache: true, title: project.name, description: project.subText, img: project.image})
  })
})

//News can now be rendered on a page by page basis further increasing SEO
app.get('/news/:articleTitle', (req, res) =>{
  console.log('User requesting news article ' + req.params.articleTitle)
  let titleTransform = req.params.articleTitle.replace(/-/g,' ') //Because hiphens are better than %20
  console.log('Title transformed to ' + titleTransform)
  News.findOne({title: titleTransform}, (err, news) => {
    if(err)
      return res.sendStatus(500)
    if(news == null)
      return res.sendStatus(400)

    console.log('Got')
    console.log(news.body)
    
    res.render('news', {cache: false, title: news.title, description: news.subText, img: news.image, content: news.body, date: news.date, author: news.author})
  })
})

//All paths require title, description and icon paths for headers and twitter cards
app.get('/', (req,res) =>{
  return res.render('index', {cache: false, title: 'Built Broken Studios', description: 'Built it, Break it, ReAnimate it!',  img: '/img/SpiderBotPic.png'})
})

app.get('/project', (req, res) =>{
  return res.render('project-overview', {cache: true, title: 'Built Broken Studios - Projects', description: 'We have a lot of projects. Mods, libiraries and others included!',  img: '/img/mods/assemblyline.png', } )
})

app.get('/about', (req, res) =>{
  return res.render('about', {cache: true, title: 'Built Broken Studios - Projects', description: 'Built broken studios is a crew of awesome developers.',  img: '/img/mods/assemblyline.png'})
})

app.get('/contact', (req, res) =>{
  return res.render('contact', {cache: true, title: 'Built Broken Studios - Contact', description: 'Discord, Twitter, Github and other points of contact!',  img: '/img/Gear-icon.png'})
})

//Posting for news
app.post('/news', (req, res) =>{
  //State missing info / Deny without auth header
  let authHeader = req.get('X-AUTH-HEADER')
  let contentType = req.get('Content-Type')
  if(!authHeader)
    return res.sendStatus(401)

  //Need content type specified to parse.
  if(contentType != 'application/json')
    return res.sendStatus(400)

  //Deny if auth missing
  if(server_config.AUTH_HEADER != req.get('X-AUTH-HEADER'))
    return res.sendStatus(401)

  if(req.get)
  /*
  title: String,
  subText: String,
  image: String,
  date: Date,
  author: String,
  body: String
  */

  //This is only for DB error posting. Express will return a separate error if json is malformed.
  //EX: SyntaxError: Unexpected token &#39; in JSON at position 172
  var news = new News(req.body)
  news.save((err) => {
    if(err)
      return res.sendStatus(500)
    
    return res.sendStatus(201)
    
  })
  
})

//Open post paths

//Expose server
var server = http.listen(8080, () => {
    console.log('server is listening on port', server.address().port)
})
