//Various requirements
var express = require('express')
var bodyParser = require('body-parser')
var app = express()
var http = require('http').Server(app)
var mongoose = require('mongoose')

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
  tags: Array
})

var Announcement = mongoose.model('Announcement', {
  text: String
})

var News = mongoose.model('News', {
  title: String,
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


//GET/POSTS

//Web
//Using name instead of IDs because SEO
app.get('/project/:name', (req, res) =>{
  Project.findOne({name: req.params.name}, (err, project) => {
    if(err)
      return res.sendStatus(500)
    if(project == null)
      return res.sendStatus(404)
    
    res.sendFile(__dirname + '/template/project-template.html')
  })
})

//Expose server
var server = http.listen(8080, () => {
    console.log('server is listening on port', server.address().port)
})
