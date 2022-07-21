const {Sequelize,DataTypes} = require('sequelize')
const listesPersonnages = require('./personnages_data') // Contient les données des personnages
const PersonnagesModel = require('../models/Personnage_Model') // Contient la structure de données attendue pour les personnages
require('dotenv').config()
const sequelize = new Sequelize (
    `${process.env.NAME_DB}`,
    `${process.env.NAME_USER}`,
    `${process.env.MDP}#`,
    
    {
        
        host:`${process.env.HOST}`,
        port:`${process.env.PORT}`,
        dialect:`${process.env.DIALECT}`,
        dialectOptions : {
            timezone: 'Etc/GMT-2'
        },
        
        // Permet de ne pas avoir les logs des actions en cours d'opération sur la base de donnée
        logging:false
    }
    )
    
    // Instance permettant la création de la table dans la bdd puis sert ensuite plus bas à associer les valeurs des données à leurs propriétés
    const Personnages =  PersonnagesModel(sequelize,DataTypes)
    
    const initialisationDeLaBaseDeDonnées =() => {
        sequelize.authenticate()
        
        .then(_ => console.log(`La connexion à la base de données a bien été effectuée !`))
        .catch(error => console.error(error))
        
        
         sequelize.sync({force:true})
        
        .then(_ => {
            
         listesPersonnages.map (personnage => {
           Personnages.create({
                 nom : personnage.nom,
                 history : personnage.history,
                 imageCard : personnage.imageCard,
                 imageHistory:personnage.imageHistory,
                 village:personnage.village
           })
        //    .then(personnage => console.log(personnage.toJSON()))
         }) // A ne mettre en place que dans le cas où des données existantes doivent être insérées  !
    
    })
    .catch( error => console.error(error))
}


module.exports = {
    initialisationDeLaBaseDeDonnées,Personnages // Fonction + Instance
}