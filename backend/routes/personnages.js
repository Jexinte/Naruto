const express = require('express')
const router = express.Router()
const multer = require('../middleware/multer-config')
const cors = require('cors')
const createPersonnageController = require('../controllers/createPersonnage')
const displayPersonnagesController = require('../controllers/findAllPersonnages')
const findOnePersonnageController = require('../controllers/findPersonnageByPk')


router.use(express.json())

router.use(cors())

  router.get('/',displayPersonnagesController.displayAllPersonnages)
  router.get('/:id',findOnePersonnageController.findOnePersonnage)
  router.post('/',multer,createPersonnageController.createPersonnage)

  module.exports = router