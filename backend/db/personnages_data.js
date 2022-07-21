const personnages = [
  {
      id : 1,
      nom: `Naruto`,
      history:`Naruto Uzumaki (うずまきナルト, Uzumaki Naruto) est un ninja du village caché de konoha.  Il devint le jinchûriki de Kyûbi le jour de sa naissance — ce qui lui valut d'être rejeté par la plupart des habitants de konoha durant toute son enfance. Après avoir rejoint l'Équipe 7, Naruto travailla dur pour obtenir la reconnaissance des villageois tout en poursuivant son rêve de devenir Hokage. `,
      imageCard:`http://localhost:3000/img/narutoCard.webp`,
      imageHistory:`http://localhost:3000/img/narutoHistory.webp`,
      village: `konoha`
  },

  {
      id : 2,
      nom: `Sasuke`,
      history:`Sasuke Uchiwa (うちはサスケ, Uchiha Sasuke) est l'un des personnages principaux de la série. Il a été initialement présenté comme un protagoniste, un membre de konoha appartenant à l'Équipe Kakashi.  Au cours de la série, il devint de plus en plus sombre, aboutissant à une alliance avec l'Akatsuki, devenant l'un des personnages les plus dynamiques de la série.  `,
      imageCard:`http://localhost:3000/img/sasukeCard.webp`,
      imageHistory:`http://localhost:3000/img/sasukeHistory.jpg`,
      village:`konoha`
  },

  {
      id : 3,
      nom: `Sakura`,
      history:`Sakura  (うちはサクラ, Uchiha Sakura, née Haruno (春野)) est l'un des personnages principaux de la série. Elle est une ninja médecin de niveau jônin du village caché de konoha et membre de l'Équipe Kakashi.  Sakura est l'un des personnages de la série qui vit le plus sa personnalité se développer au fil de l'histoire. Au départ, elle apparaissait comme une jeune fille égoïste et relativement imbue de sa personne.  Elle avait aussi tout de la parfaite préadolescente « sans cervelle » amoureuse du garçon le plus beau et le plus fort de la classe (comme toutes les autres filles) et plus soucieuse de son apparence que de son ninjutsu. `,
      imageCard:`http://localhost:3000/img/sakuraCard.webp`,
      imageHistory:`http://localhost:3000/img/sakuraHistory.jpg`,
      village:`konoha`
  },

  {
      id : 4,
      nom: `Kakashi`,
      history:`Kakashi Hatake (はたけカカシ, Hatake Kakashi) est un jônin du village caché de konoha. En tant que chef de l’Équipe 7, il est le premier mentor des principaux protagonistes de l'histoire. Il est mondialement connu pour son utilisation du Sharingan, sous le surnom du « Ninja Copieur ». Suite à la Quatrième Grande Guerre Shinobi, il devint le Sixième Hokage (六代目火影, Rokudaime Hokage, signifiant littéralement : Sixième Ombre du Feu). `,
      imageCard:`http://localhost:3000/img/kakashiCard.webp`,
      imageHistory:`http://localhost:3000/img/kakashiHistory.jpg`,
      village:`konoha`
  },

  {
      id : 5,
      nom: `Itachi`,
      history:`Itachi Uchiwa (うちはイタチ, Uchiha Itachi) était un membre de l'Anbu issu du célèbre clan Uchiwa du village de konoha. Il tua les membres de son clan dans ce qui sera plus tard connu comme le massacre du clan Uchiwa et déserta son village, devenant un ninja déserteur (Nukenin) de Rang S et un membre de l'Akatsuki qui devint partenaire avec Kisame Hoshigaki.  `,
      imageCard:`http://localhost:3000/img/itachiCard.webp`,
      imageHistory:`http://localhost:3000/img/itachiHistory.jpg`,
      village:`konoha`
  },

  {
      id : 6,
      nom: `Asuma`,
      history:`Asuma Sarutobi (猿飛アスマ, Sarutobi Asuma) était un jônin de konoha du clan Sarutobi, ainsi qu'un ancien membre des Douze Ninjas Gardiens. Il fut également le chef de l'Équipe 10. Asuma est le fils de Hiruzen et Biwako Sarutobi, et quelques années plus tard, allait devenir l'oncle de konohamaru Sarutobi.`,
      imageCard:`http://localhost:3000/img/asumaCard.webp`,
      imageHistory:`http://localhost:3000/img/asumaHistory.jpg`,
      village:`konoha`
  },

  {
      id : 7,
      nom: `Kurenai`,
      history:`Kurenaï Sarutobi (猿飛紅, Sarutobi Kurenai, née Yûhi (夕日)) est une kunoichi de rang jônin de konoha en charge de l'Équipe 8, composée de Kiba Inuzuka, Shino Aburame et Hinata Hyûga. Kurenaï était présente au village de konoha au moment de l'attaque de Kyûbi. Alors âgée d'une quinzaine d'année et encore chûnin elle voulait comme tous ceux de son âge participer au combat contre le renard.`,
      imageCard:`http://localhost:3000/img/kurenaiCard.webp`,
      imageHistory:`http://localhost:3000/img/kurenaiHistory.jpg`,
      village:`konoha`
  },

  {
      id : 8,
      nom: `Chôji`,
      history:`Chôji Akimichi (秋道チョウジ, Akimichi Chôji) est l'un des principaux protagonistes de la série Naruto. C'est un chûnin du village caché de konoha, membre du clan Akimichi et de l'Équipe Asuma, formée à l'origine par Asuma Sarutobi. Aux côtés de Shikamaru Nara et Ino Yamanaka ils forment le nouveau trio « Ino-Shika-Chô », comme leurs pères avant eux.`,
      imageCard:`http://localhost:3000/img/chôjiCard.webp`,
      imageHistory:`http://localhost:3000/img/chojiHistory.jpg`,
      village:`konoha`
  },

  {
      id : 9,
      nom: `Shikamaru`,
      history:`Shikamaru Nara (奈良シカマル, Nara Shikamaru) est un membre du clan Nara de konoha. Bien que paresseux par nature, Shikamaru possède une intelligence telle qu'elle lui permet de toujours prendre l'avantage en combat. Les responsabilités qui lui incombent du fait de ses succès lui provoquent fréquemment de l'ennui, mais il les accepte volontiers pour ainsi être au service de ses coéquipiers de l'Équipe Asuma et pour prouver sa valeur aux générations passés et futures.`,
      imageCard:`http://localhost:3000/img/shikamaruCard.webp`,
      imageHistory:`http://localhost:3000/img/shikamaruHistory.jpg`,
      village:`konoha`
  },

  {
      id : 10,
      nom: `Lee`,
      history:`
      Rock Lee (ロック・リー, Rokku Rî) est shinobi du clan Lee de konoha. Lorsque Lee était enfant et étudiant à l'Académie de konoha, il ne possédait aucun talent pour le ninjutsu et le genjutsu. Les autres enfants se moquaient sans cesse de lui, persuadés qu'avec de telles lacunes il ne parviendrait jamais à devenir ninja.`,
      imageCard:`http://localhost:3000/img/leeCard.webp`,
      imageHistory:`http://localhost:3000/img/leeHistory.jpg`,
      village:`konoha`
  },

  {
      id : 11,
      nom: `konohamaru`,
      history:`konohamaru Sarutobi (猿飛木ノ葉丸, Sarutobi konohamaru), est shinobi du clan Sarutobi du village caché de konoha. Il s'efforce à être un jour aussi fort que son idole, Naruto Uzumaki. konohamaru naquit au sein du clan Sarutobi et fut nommé d'après konoha par son grand-père.`,
      imageCard:`http://localhost:3000/img/konohamaruCard.webp`,
      imageHistory:`http://localhost:3000/img/konohamaruHistory.png`,
      village:`konoha`
  },

  {
      id : 12,
      nom: `Tsunade`,
      history:`Tsunade (綱手, Tsunade) est l'une des légendaires Sannin de konoha. Considérée dans le monde comme la plus forte des kunoichi[5] et la plus grande ninja médecin,[6] la mort répétée des êtres lui étant les plus chers firent que Tsunade abandonna la vie de shinobi pendant plusieurs années. `,
      imageCard:`http://localhost:3000/img/tsunadeCard.webp`,
      imageHistory:`http://localhost:3000/img/tsunadeHistory.png`,
      village:`konoha`
  },

  {
      id : 13,
      nom: `Gaara`,
      history:`Gaara (我爱罗, Gaara) est un ninja du village caché du Sable (suna). Il est également le benjamin des enfants du Quatrième Kazekage, le petit frère de Kankurô et Temari. Il était le troisième jinchûriki de Shukaku,[8] étant ainsi devenu une arme pour suna, il acquit le surnom de « Gaara du Désert » (砂瀑の我愛羅, Sabaku no Gaara, signifiant littéralement : Gaara des Chutes de Sable).  `,
      imageCard:`http://localhost:3000/img/gaaraCard.webp`,
      imageHistory:`http://localhost:3000/img/gaaraHistory.jpg`,
      village:`suna`
  },

  {
      id : 14,
      nom: `Kankurô`,
      history:`Kankurô (カンクロウ, Kankurô) est un ninja-marionnettiste du village caché de suna. Il est le fils du Quatrième Kazekage et le frère de Gaara (actuel Kazekage) et de Temari. On ne sait pas grand chose de l'enfance de Kankurô. Mais il semblerait qu'enfant, ni lui, ni Temari ne furent proches de leur frère cadet, Gaara. Si ce dernier fut élevé par Yashamaru, il semblerait qu'eux le furent par leur père.`,
      imageCard:`http://localhost:3000/img/kankurôCard.webp`,
      imageHistory:`http://localhost:3000/img/kankurôHistory.jpg`,
      village:`suna`
  },

  {
      id : 15,
      nom: `Temari`,
      history:`Temari Nara (奈良テマリ, Nara Temari) est une kunoichi du village caché de suna, membre du clan du Kazekage et aînée de la Fratrie du Sable. Elle devient un membre du village de konoha en se mariant avec Shikamaru Nara. On ne sait pas grand chose de l'enfance de Temari. Mais il semblerait qu'enfant, ni elle, ni Kankurô ne furent proches de leur frère cadet, Gaara.`,
      imageCard:`http://localhost:3000/img/temariCard.webp`,
      imageHistory:`http://localhost:3000/img/temariHistory.jpg`,
      village:`suna`
  },

  {
      id : 16,
      nom: `Rasa`,
      history:`Rasa (羅砂, Rasa) était le Quatrième Kazekage (四代目風影, Yondaime Kazekage, signifiant littéralement : Quatrième Ombre du Vent) du village caché de suna. Il commença son règne, dans une période de grande panique pour le village. En effet, suna avait connu une longue période où ils furent totalement désemparés suite à la disparition du Troisième Kazekage.`,
      imageCard:`http://localhost:3000/img/rasaCard.webp`,
      imageHistory:`http://localhost:3000/img/rasaHistory.webp`,
      village:`suna`
  },

  {
      id : 17,
      nom: `Bunpuku`,
      history:`Bunpuku (分福, Bunkuku) était un ancien prêtre de suna et l'un des deux premiers jinchûriki de Shukaku. Bunpuku fut choisi pour devenir le jinchûriki de Shukaku. Avant de se faire enfermer, il se fit graver, par son maître, les kanji « Cœur » (心, Kokoro) et « Accepter » (受, Ukeru) dans les paumes de ses mains. `,
      imageCard:`http://localhost:3000/img/bunpukuCard.webp`,
      imageHistory:`http://localhost:3000/img/bunpukuHistory.webp`,
      village:`suna`
  },

  {
      id : 18,
      nom: `Chiyo`,
      history:`Chiyo (チヨ, Chiyo) est une ancienne du Village Caché du Sable, ainsi que la grand-mère du renégat Sasori. Chiyo était appelée par les habitants du village de suna, Chiyo-baasama (チヨバア様, pouvant se traduire par « Honorable Grand-Mère Chiyo »), en raison de ses nombreux talents (spécialiste des poisons, grand maître dans l'art des marionnettistes) et de ses nombreux faits d'arme qui firent la gloire du village. `,
      imageCard:`http://localhost:3000/img/chiyoCard.webp`,
      imageHistory:`http://localhost:3000/img/chiyoHistory.jpg`,
      village:`suna`
  },

  {
      id : 19,
      nom: `Ebizô`,
      history:`Ebizô (エビゾウ, Ebizô), appelé Honorable Grand-Père Ebizô (エビゾウジイ様, Ebizô-jiisama) par les habitants de suna, est grandement vénéré au village caché de suna. Lui et sa grande-sœur, Chiyo, sont connus comme l'Honorable Fratrie (御姉弟, Gokyôdai).  `,
      imageCard:`http://localhost:3000/img/ebizôCard.webp`,
      imageHistory:`http://localhost:3000/img/ebizôHistory.png`,
      village:`suna`
  },

  {
      id : 20,
      nom: `Matsuri`,
      history:`Matsuri (マツリ, Matsuri) est une genin du village caché de suna et est la meilleure amie de Sari. Dans l'anime, Matsuri fut témoin du meurtre de ses parents dans le passé, la rendant hostile aux armes et à la violence.Dans l'anime, Matsuri est montrée de manière plus approfondie. Elle a d'abord été une jeune fille timide avec une voix douce, mais elle devient plus courageuse et plus franche sous la tutelle de Gaara. `,
      imageCard:`http://localhost:3000/img/matsuriCard.webp`,
      imageHistory:`http://localhost:3000/img/matsuriHistory.jpg`,
      village:`suna`
  },

  {
      id : 21,
      nom: `Maki`,
      history:`Maki (マキ, Maki) est une kunoichi du village caché suna. Maki est une membre de la Troisième Division de l'Armée de l'Alliance Ninja sous les ordres de Kakashi Hatake.`,
      imageCard:`http://localhost:3000/img/makiCard.webp`,
      imageHistory:`http://localhost:3000/img/makiHistory.jpg`,
      village:`suna`
  },

  {
      id : 22,
      nom: `Yashamaru`,
      history:`Yashamaru (夜叉丸, Yashamaru) était un Anbu du village caché de suna. Il était également le bras droit du Quatrième Kazekage. La sœur aînée de Yashamaru, Karura, mourut peu après avoir donné naissance à son plus jeune fils Gaara, en qui le Shukaku à Une Queue avait été scellé. Après sa mort, Yashamaru fut nommé tuteur de Gaara par le Quatrième Kazekage.`,
      imageCard:`http://localhost:3000/img/yashamaruCard.webp`,
      imageHistory:`http://localhost:3000/img/yashamaruHistory.jpg`,
      village:`suna`
  },

  {
      id : 23,
      nom: `Sasori`,
      history:`Sasori (サソリ, Sasori), aussi connu sous le nom de Sasori du Sable Rouge (赤砂のサソリ, Akasuna no Sasori)[3], était un nukenin de Rang S du village caché de suna, ayant fait partie du Régiment des Marionnettistes, et un membre de l'Akatsuki où il fit équipe avec Orochimaru et plus tard, Deidara. Alors qu'il était enfant, les parents de Sasori furent tués par Sakumo Hatake.`,
      imageCard:`http://localhost:3000/img/sasoriCard.webp`,
      imageHistory:`http://localhost:3000/img/sasoriHistory.jpg`,
      village:`suna`
  },

  {
      id : 24,
      nom: `Baki`,
      history:`Baki (バキ, Baki) est un jônin du village de suna et un membre du conseil consultatif de suna. Baki apparait comme un ninja froid, partageant les idées du Quatrième Kazekage sur la dangerosité des traités de paix pour le monde des ninjas basé sur la guerre. Il est aussi, comme la plupart des ninjas du sable, sans pitié en combat, exécutant froidement les ordres. `,
      imageCard:`http://localhost:3000/img/bakiCard.webp`,
      imageHistory:`http://localhost:3000/img/bakiHistory.webp`,
      village:`suna`
  },

  {
      id : 25,
      nom: `Shodai`,
      history:`Au cours de son mandat à la tête de kumo, après l'Époque de la Guerre des Provinces, A envoya vraisemblablement les Frères d'Or et d'Argent pour capturer Kyûbi, une tâche à laquelle ils échouèrent finalement.Il offrit également des terres dans la Vallée des Nuages et de la Foudre au Clan Yotsuki en échange de leur loyauté. Lors de la première réunion des cinq Kage pendant la Première Grande Guerre Shinobi, il est accompagné par le futur Deuxième Raikage ; son garde du corps de longue date.`,
      imageCard:`http://localhost:3000/img/shodaiCard.webp`,
      imageHistory:`http://localhost:3000/img/shodaiHistory.jpg`,
      village:`kumo`
  },

  {
      id : 26,
      nom: `Nidaime`,
      history:`A (エー, Ê) était le Deuxième Raikage (二代目雷影, Nidaime Raikage, signifiant littéralement : Deuxième Ombre de la Foudre) du village caché de kumo. Avant de devenir le Deuxième Raikage, il était le garde du Premier Raikage.[1] Lors de la Première Grande Guerre Shinobi, il l'accompagna au tout premier Sommet des Cinq Kage. Là, il se tenait derrière le premier observant le conseil.[2] Durant son mandat, le Deuxième Raikage de kumo signa une alliance formelle avec konoha. Pendant la cérémonie, A et le Deuxième Hokage furent pris en embuscade par les frères Or et Argent, qui tentèrent de mettre en scène un coup d'État. On ne sait pas ce qui arriva au Raikage, mais il est dit que le Hokage s'échappa en frôlant de peu la mort `,
      imageCard:`http://localhost:3000/img/nidaimeCard.webp`,
      imageHistory:`http://localhost:3000/img/nidaimeHistory.png`,
      village:`kumo`
  },

  {
      id : 27,
      nom: `Yondaime`,
      history:`A (エー, Ê) est le Quatrième Raikage (四代目雷影, Yondaime Raikage, signifiant littéralement : Quatrième Ombre de la Foudre) du village de kumo. A faisait partie de l'équipe spéciale constituée par son père, le Troisième Raikage, pour lutter contre Hachibi. Quand il était un jeune homme, son père décida de lui choisir un frère qui puisse lui servir d'équipier ou de garde du corps parmi les jeunes garçons talentueux de kumo.  `,
      imageCard:`http://localhost:3000/img/yondaimeCard.webp`,
      imageHistory:`http://localhost:3000/img/yondaimeHistory.jpg`,
      village:`kumo`
  },

  {
      id : 28,
      nom: `Godaime`,
      history:`Darui (ダルイ, Darui) est un ninja de niveau jônin du village de kumo[4] et le bras droit du Quatrième Raikage.[5] Il lui succéda plus tard pour devenir le Cinquième Raikage (五代目雷影, Godaime Raikage, signifiant littéralement : Cinquième Ombre de la Foudre). Darui était autrefois un élève du Troisième Raikage.`,
      imageCard:`http://localhost:3000/img/daruiCard.webp`,
      imageHistory:`http://localhost:3000/img/godaimeHistory.webp`,
      village:`kumo`
  },

  {
      id : 29,
      nom: `C`,
      history:`C (シー, Shî, Kana : Shî) est un jônin du village caché de kumo. Contrairement à son partenaire Darui, C est décrit comme un individu très sérieux et mature, normalement montré avec un look plein d'assurance ainsi qu'une grande confiance en lui visible sur son visage. Il fait souvent passer son sens du devoir avant tout, comme quand il dit à Darui qu'il n'y avait pas de temps pour se reposer lorsqu'ils étaient de retour au village après le Sommet des Kage du fait qu'ils devaient commencer à se préparer à la guerre.`,
      imageCard:`http://localhost:3000/img/cCard.webp`,
      imageHistory:`http://localhost:3000/img/cHistory.png`,
      village:`kumo`
  },

  {
      id : 30,
      nom: `Ginkaku`,
      history:`Ginkaku (銀角, Ginkaku) était un membre de la Brigade Kinkaku, une unité de ninja de kumo, spécialisée dans la traque. Bien avant konoha, kumo tenta de s'approprier les pouvoirs de Kyûbi.[1] Au cours d'un des affrontements entre le Démon à Neuf Queues et les shinobi du village caché du Pays de la Foudre, les deux Frères d'Or et d'Argent furent avalés par Kyûbi.`,
      imageCard:`http://localhost:3000/img/ginkakuCard.jpg`,
      imageHistory:`http://localhost:3000/img/ginkakuHistory.png`,
      village:`kumo`
  },

  {
      id : 31,
      nom: `Motoï`,
      history:`Motoi (モトイ, Motoi) est un shinobi du village caché de kumo qui est stationné sur Genbu. Il était le meilleur ami de Killer B, jusqu'au jour où le démon Hachibi (démon à 8 queues) qui était scellé dans le cousin de Killer B se déchaina et tua le père de Motoï quand celui-ci et d'autres ninjas tentèrent de le sceller dans le Kohaku no Jôhei. B fut choisi pour être le nouveau jinchûriki de Hachibi. Motoï essaya de le tuer, voulant tuer le démon et, par la même occasion, venger la mort de son père. `,
      imageCard:`http://localhost:3000/img/motoiCard.webp`,
      imageHistory:`http://localhost:3000/img/motoiHistory.webp`,
      village:`kumo`
  },


  {
      id : 32,
      nom: `Omoï`,
      history:`Omoï (オモイ, Omoi) est un shinobi de kumo, et un membre de l'Équipe Samui. Omoï est très prudent et soucieux du détail. Sa tendance à exagérer les situations et à se poser trop de questions qui énerve considérablement sa coéquipière Karui. En effet, il s'imagine souvent des scénarios catastrophes improbables. Omoï aime se jouer du caractère impulsif de Karui, cependant les issues sont souvent douloureuses pour lui. Il accorde un certain respect à ceux qui tiennent leur parole, même s'il s'agit d'un ennemi. `,
      imageCard:`http://localhost:3000/img/omoiCard.webp`,
      imageHistory:`http://localhost:3000/img/omoiHistory.jpg`,
      village:`kumo`
  },

  {
      id : 33,
      nom: `Karui`,
      history:`Karui Akimichi (秋道カルイ, Akimichi Karui) est une kunoichi de kumo, membre de l'Équipe Samui. Elle se maria plus tard avec Chôji Akimichi et s'installa à konoha, devenant ainsi une membre du clan Akimichi. Karui est très impulsive et se dispute souvent avec Omoï. Elle a beaucoup de respect pour Killer Bee et est prête à tout pour le retrouver.`,
      imageCard:`http://localhost:3000/img/karuiCard.webp`,
      imageHistory:`http://localhost:3000/img/karuiHistory.jpg`,
      village:`kumo`
  },

  {
      id : 34,
      nom: `Mabui`,
      history:`Mabui (マブイ, Mabui) était une kunoichi et l'assistante d'A, le Quatrième Raikage. Elle transmettait ses ordres au reste du village de kumo. Elle restait calme dans les situations stressantes et remplissait immédiatement les tâches qu'on lui donnait. En outre, elle, comme Darui, semblait être très contrariée à chaque fois que le Raikage abîmait le mobilier. Mabui possédait une technique unique qui lui permet de transférer des matières sur de longues distances à la vitesse de la lumière. `,
      imageCard:`http://localhost:3000/img/mabuiCard.webp`,
      imageHistory:`http://localhost:3000/img/mabuiHistory.jpg`,
      village:`kumo`
  },



  {
      id : 35,
      nom: `Killer B`,
      history:`Killer B (キラービー, Kirâbî, Kana : Killer Bee) est un shinobi du village de kumo, et le jinchûriki de Gyûki, le démon à huit queues.À l'âge de cinq ans, Motoï devint le meilleur ami de B. Ils avaient inventé leur propre salut.
      Il fut choisi pour être le partenaire de A car les Raikage ont toujours eu un allié avec qui combattre et A n'avait pas de frère donc il devait chercher un partenaire avec qui il pouvait exécuter le double Lariat. Après avoir été choisi, Bee obtint son surnom « B » et forma avec A le duo A&B, c'est aussi à partir de là que A et B se considérèrent comme frères.
      
      `,
      imageCard:`http://localhost:3000/img/killerbCard.webp`,
      imageHistory:`http://localhost:3000/img/killerbHistory.jpg`,
      village:`kumo`
  },

  {
      id : 36,
      nom: `Yugito`,
      history:`Yugito Nii (二位ユギト, Nii Yugito) était une kunoichi du village caché de kumo ainsi que le dernier jinchûriki du Démon Chat à Deux Queues, Matatabi. Yugito est devenue le jinchûriki de Nibi vers l'âge de deux ans, et à l'issue d'un dur et terrible entraînement lui ayant été imposé.`,
      imageCard:`http://localhost:3000/img/yugitoCard.webp`,
      imageHistory:`http://localhost:3000/img/yugitoHistory.jpg`,
      village:`kumo`
  },
]

module.exports = personnages