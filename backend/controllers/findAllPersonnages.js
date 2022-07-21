const {Personnages} = require('../db/sequelize')


exports.displayAllPersonnages = (req,res) => {

        //Appel de la méthode pour récupérer l'ensemble des personnages
        Personnages.findAll()
        .then(personnages => {
            
            res.json(personnages)
        }) 
    
}