module.exports = (sequelize,DataTypes) => {
    
  return sequelize.define('personnages_naruto',
  {
          id : {
              type : DataTypes.INTEGER,
              primaryKey : true,
              autoIncrement : true
          },

          nom : {
              type : DataTypes.STRING,
              allownull : false
          },
          history : {
              type: DataTypes.TEXT,
              allownull : false
          },
          imageCard : {
              type:DataTypes.STRING,
              allownull:false,
            
          },

          imageHistory : {
              type:DataTypes.STRING,
              allownull : false,
          },

          village : {
              type:DataTypes.STRING,
              allownull:false
          }
   },{
      timestamps : false
   })
}