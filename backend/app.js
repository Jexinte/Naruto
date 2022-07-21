const express = require('express')
const morgan = require('morgan')
const sequelize = require('./db/sequelize')
const personnagesRoutes = require('./routes/personnages')
const path = require('path')

const app = express()
const port = 3000

app.use(morgan('dev'))
app.use('/img',express.static('img'))
app.use(express.urlencoded({extended:true}))
// Connexion bdd
sequelize.initialisationDeLaBaseDeDonnées()

// Routes
app.use('/api/personnages',personnagesRoutes)


app.listen(port,() => console.log(`L'application a bien démarrer sur le port ${port}`))