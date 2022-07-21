const { Personnages } = require('../db/sequelize')

exports.createPersonnage = (req,res)  => {
       const personnageObject = JSON.stringify(req.body)
       const personnage = JSON.parse(personnageObject)
       Personnages.create({
               
               nom : personnage.nom,
               history : personnage.history,
               imageCard : `${req.protocol}://${req.get('host')}/img/${req.files['imageCard'][0].filename}`,
               imageHistory : `${req.protocol}://${req.get('host')}/img/${req.files['imageHistory'][0].filename}`,
               village:personnage.village
        })    
                .then(personnage => res.status(201).json(personnage))
}