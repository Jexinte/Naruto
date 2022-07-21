const { Personnages } = require('../db/sequelize')

exports.findOnePersonnage = (req,res) => {
        Personnages.findByPk(req.params.id)
        .then(personnage => res.json(personnage))
}