use Cinema;

db.Membre.insert({
	_idMembre:"Memb-1",
	nom:"Rakotomanana",
	prenom:"Kanto",
	login:"kanto",
	password:"7f7acd4bb42ebf8fb88eac6730138a64890a66da",
	sexe:"F",
	mail:"rakotomananaKanto@yahoo.fr",
	suggest:[{
		_idCategorie:"1",
		note:8
	},
	{
		_idCategorie:"2",
		note:5
	},
	{
		_idCategorie:"3",
		note:0
	},
	  {
		_idCategorie:"4",
		note:1
	}
		],
	follow:["1","2","3"],
	notification:[
		{
			message:"",
			dateFin:null,
			isVue:false,
			params:[]
		}
	],
	evenement:[
		{
			idFilm:"",
			labelEvenement:"",
			dateEvenement:new Date(),
			salle:"",
			listeMembre:[
				{
					idMembre:"",
					accepter:false
				}
			]
		}
	]
});

db.Membre.insert({
	_idMembre:"Memb-2",
	nom:"Ralambomanana",
	prenom:"Jean Alain",
	login:"alain",
	password:"191cd908e81cf3c9c649abd42c79ffe6b7b435ee",
	sexe:"M",
	mail:"Ralambomanana@yahoo.fr",
	suggest:[{
			_idCategorie:"1",
			note:1
		},
		{
			_idCategorie:"2",
			note:10
		},
		{
			_idCategorie:"3",
			note:5
		},
		  {
			_idCategorie:"4",
			note:8
		}
		],
	follow:["1","4","5"],
	notification:[
		{
			message:"",
			dateFin:null,
			isVue:false,
			params:[]
		}
	],
	evenement:[
		{
			idFilm:"",
			labelEvenement:"",
			dateEvenement:null,
			salle:"",
			listeMembre:[
				{
					idMembre:"",
					accepter:false
				}
			]
		}
	]
});

db.Membre.insert({
	_idMembre:"Memb-3",
	nom:"Ravelomanana",
	prenom:"Sarah",
	login:"sarah",
	password:"5bf578ebafcba935f6867590e1e4ad6f79ff9d71",
	sexe:"F",
	mail:"Ralambomanana@yahoo.fr",
	suggest:[{
			_idCategorie:"1",
			note:10
		},
		{
			_idCategorie:"2",
			note:10
		},
		{
			_idCategorie:"3",
			note:5
		},
		  {
			_idCategorie:"4",
			note:2
		}
		],
	follow:["1","2","5"],
	notification:[
		{
			message:"",
			dateFin:null,
			isVue:false,
			params:[]
		}
	],
	evenement:[
		{
			idFilm:"",
			labelEvenement:"",
			dateEvenement:null,
			salle:"",
			listeMembre:[
				{
					idMembre:"",
					accepter:false
				}
			]
		}
	]
});

db.Membre.insert({
	_idMembre:"Memb-4",
	nom:"Jean Michel",
	prenom:"Patrick",
	login:"patrick",
	password:"a62c6d6c4a4d864c223604b2631a6b8309a887d2",
	sexe:"M",
	mail:"michel@yahoo.fr",
	suggest:[{
			_idCategorie:"1",
			note:5
		},
		{
			_idCategorie:"2",
			note:8
		},
		{
			_idCategorie:"3",
			note:1
		},
		  {
			_idCategorie:"4",
			note:2
		}
		],
	follow:["2","6","7"],
	notification:[
		{
			message:"",
			dateFin:null,
			isVue:false,
			params:[]
		}
	],
	evenement:[
		{
			idFilm:"",
			labelEvenement:"",
			dateEvenement:null,
			salle:"",
			listeMembre:[
				{
					idMembre:"",
					accepter:false
				}
			]
		}
	]
});



db.Categorie.insert({
	_idCategorie:"1",
	nomCategorie:"Action"
}
);
 
db.Categorie.insert({
	_idCategorie:"2",
	nomCategorie:"Comedie"
});
 
db.Categorie.insert({
	_idCategorie:"3",
	"nomCategorie":"Drame"
});
 
db.Categorie.insert({
	_idCategorie:"4",
	nomCategorie:"Fantastique"
});

db.Film.insert({
	_idFilm:"1",
	titre:"Warcraft : Le commencement",
	introduction:"Le pacifique royaume d'Azeroth est au bord de la guerre alors que sa civilisation doit faire face &agrave; une redoutable race d'envahisseurs: des guerriers Orcs fuyant leur monde moribond pour en coloniser un autre. Alors qu'un portail s'ouvre pour connecter les deux mondes, une arm&eacute;e fait face &agrave; la destruction et l'autre &agrave; l'extinction.",
	dateSortie:new MongoDate("25-06-2016"),
	realisateur:"Duncan Jones",
	image:"warcraft_le_commencement.jpg",
	extrait:"warcraft_le_commencement.mp4",
	_idCategorie:"1",
	note:[
	{
	_idCategorie:"1",
	note:8,
	},
	{
		_idCategorie:"2",
		note:2
	},
	{
		_idCategorie:"3",
		note:5
	},
	{
		_idCategorie:"4",
		note:8
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});


db.Film.insert({
	_idFilm:"2",
	titre:" X-MEN APOCALYPSE",
	introduction:"N&eacute; il y a plus de 5000 ans en Egypte ancienne, Apocalypse est le premier mutant au monde. Sa capacit&eacute; &agrave; changer d'apparence, sa force exceptionnelle, ses pouvoirs de t&eacute;l&eacute;pathie et de t&eacute;l&eacute;portation, font de lui un dieu vivant, &eacute;voluant &agrave; des moments cl&eacute;s de l'Histoire. ",
	dateSortie:new Date("18-06-2016"),
	realisateur:"Bryan Singer",
	image:"x-men_apocalypse.jpg",
	extrait:"x-men_apocalypse.mp4",
	_idCategorie:"1",
	note:[
	{
	_idCategorie:"1",
	note:10,
	},
	{
		_idCategorie:"2",
		note:0
	},
	{
		_idCategorie:"3",
		note:3
	},
	{
		_idCategorie:"4",
		note:8
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});


db.Film.insert({

	_idFilm:"3",
	titre:" Captain America: Civil War",
	introduction:"Steve Rogers est d&eacute;sormais &agrave; la t&ecirc;te des Avengers, dont la mission est de prot&eacute;ger l'humanit&eacute;. À la suite d'une de leurs interventions qui a caus&eacute; d'importants d&eacute;g&acirc;ts collat&eacute;raux, le gouvernement d&eacute;cide de mettre en place un organisme de commandement et de supervision.",
	dateSortie:new Date("27-06-2016"),
	realisateur:"Anthony Russo, Joe Russo",
	image:"captain_america_civil_war.jpg",
	extrait:"captain_america_civil_war.mp4",
	_idCategorie:"1",
	note:[
	{
	_idCategorie:"1",
	note:9,
	},
	{
		_idCategorie:"2",
		note:2
	},
	{
		_idCategorie:"3",
		note:3
	},
	{
		_idCategorie:"4",
		note:9
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
}); 

 
db.Film.insert({
	_idFilm:"4",
	titre:" Star Trek Sans limites",
	introduction:"Une aventure toujours plus &eacute;pique de l'USS Enterprise et de son audacieux &eacute;quipage.",
	dateSortie:new Date("17-06-2016"),
	realisateur:"Justin Lin",
	image:"star_trek_sans_limites.jpg",
	extrait:"star_trek_sans_limites.mp4",
	_idCategorie:"1",
	note:[
	{
	_idCategorie:"1",
	note:9,
	},
	{
		_idCategorie:"2",
		note:4
	},
	{
		_idCategorie:"3",
		note:0
	},
	{
		_idCategorie:"4",
		note:6
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]

});


db.Film.insert({
	_idFilm:"5",
	titre:" Retour chez ma m&egrave;re ",
	introduction:"À 40 ans, St&eacute;phanie est contrainte de retourner vivre chez sa m&egrave;re. Elle est accueillie les bras ouverts : &agrave; elle les joies de l'appartement surchauff&eacute;, de Francis Cabrel en boucle, des parties de Scrabble endiabl&eacute;es et des pr&eacute;cieux conseils maternels sur la façon de se tenir &agrave; table et de mener sa vie.",
	dateSortie:new Date("01-06-2016"),
	realisateur:"Eric Lavaine",
	image:"retour_chez_ma_mere.jpg",
	extrait:"retour_chez_ma_mere.mp4",
	_idCategorie:"2",
	note:[
	{
	_idCategorie:"1",
	note:2,
	},
	{
		_idCategorie:"2",
		note:10
	},
	{
		_idCategorie:"3",
		note:5
	},
	{
		_idCategorie:"4",
		note:1
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});

db.Film.insert({
	_idFilm:"6",
	titre:" Joyeuse F&ecirc;te des M&egrave;res",
	introduction:"En couple ou s&eacute;par&eacute;es, amoureuses, courageuses, maladroites, touchantes… À l'approche du jour de la F&ecirc;te des M&egrave;res, d&eacute;couvrez les destins crois&eacute;s de plusieurs filles, femmes, m&egrave;res (et p&egrave;res !) de famille. Un jour où vous apprendrez que tout peut changer. ",
	dateSortie:new Date("25-06-2016"),
	realisateur:"Garry Marshall",
	image:"joyeuse_fete_des_meres.jpg",
	extrait:"joyeuse_fete_des_meres.mp4",
	_idCategorie:"2",
	note:[
	{
	_idCategorie:"1",
	note:1,
	},
	{
		_idCategorie:"2",
		note:9
	},
	{
		_idCategorie:"3",
		note:8
	},
	{
		_idCategorie:"4",
		note:2
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});

db.Film.insert({_idFilm:"7",
	titre:" The Nice Guys ",
	introduction:"Los Angeles. Ann&eacute;es 70. Deux d&eacute;tectives priv&eacute;s enqu&ecirc;tent sur le pr&eacute;tendu suicide d'une starlette. Malgr&eacute; des m&eacute;thodes pour le moins « originales », leurs investigations vont mettre &agrave; jour une conspiration impliquant des personnalit&eacute;s tr&egrave;s haut plac&eacute;es.",
	dateSortie:new Date("15-06-2016"),
	realisateur:"Shane Black",
	image:"the_nice_guys.jpg",
	extrait:"the_nice_guys.mp4",
	_idCategorie:"2",
	note:[
	{
	_idCategorie:"1",
	note:2,
	},
	{
		_idCategorie:"2",
		note:7
	},
	{
		_idCategorie:"3",
		note:5
	},
	{
		_idCategorie:"4",
		note:1
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});

db.Film.insert({_idFilm:"8",
	titre:" Un homme &agrave; la hauteur ",
	introduction:"Diane, une avocate, fraichement c&eacute;libataire, reçoit un appel d'Alexandre, un architecte charmant qu'elle n'avait jamais rencontr&eacute;, et qui va l'aider &agrave; retrouver son t&eacute;l&eacute;phone &eacute;gar&eacute;. Lorsqu'ils se rencontrent, le rendez-vous prend un tour inattendu.",
	dateSortie:new Date("04-06-2016"),
	realisateur:"Laurent Tirard",
	image:"un_homme_a_la_hauteur.jpg",
	extrait:"un_homme_a_la_hauteur.mp4",
	_idCategorie:"2",
	note:[
	{
	_idCategorie:"1",
	note:2,
	},
	{
		_idCategorie:"2",
		note:10
	},
	{
		_idCategorie:"3",
		note:5
	},
	{
		_idCategorie:"4",
		note:0
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});


db.Film.insert({
	_idFilm:"9",
	titre:"  L'Origine de la violence ",
	introduction:"Lors d'un voyage scolaire en Allemagne, un jeune professeur, Nathan Fabre, d&eacute;couvre au camp de concentration de Buchenwald la photographie d'un d&eacute;tenu ressemblant &agrave; son p&egrave;re. Il d&eacute;cide alors de se lancer dans une recherche qui va bouleverser sa vie. ",
	dateSortie:new Date("25-06-2016"),
	realisateur:"Élie Chouraqui",
	image:"l'origine_de_la_violence.jpg",
	extrait:"l'origine_de_la_violence.mp4",
	_idCategorie:"3",
	note:[
	{
	_idCategorie:"1",
	note:0
	},
	{
		_idCategorie:"2",
		note:5
	},
	{
		_idCategorie:"3",
		note:10
	},
	{
		_idCategorie:"4",
		note:1
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});

db.Film.insert({
	_idFilm:"10",
	titre:" De battre mon coeur s'est arr&ecirc;t&eacute; ",
	introduction:"Tom semble marcher sur les traces de son p&egrave;re dans l'immobilier v&eacute;reux. Mais une rencontre fortuite le pousse &agrave; croire qu'il pourrait &ecirc;tre le pianiste concertiste de talent qu'il r&ecirc;vait de devenir. Sans cesser ses activit&eacute;s, il pr&eacute;pare une audition.  ",
	dateSortie:new Date("16-06-2016"),
	realisateur:"Jacques Audiard",
	image:"de_battre_mon_coeur_s_est_arrete.jpg",
	extrait:"de_battre_mon_coeur_s_est_arrete.mp4",
	_idCategorie:"3",
	note:[
	{
	_idCategorie:"1",
	note:1,
	},
	{
		_idCategorie:"2",
		note:5
	},
	{
		_idCategorie:"3",
		note:9
	},
	{
		_idCategorie:"4",
		note:1
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});


db.Film.insert({
	_idFilm:"11",
	titre:" Apprentice ",
	introduction:"Aiman officie dans une prison de haute s&eacute;curit&eacute;. Rahim, le bourreau en chef, y accompagne les derniers jours des condamn&eacute;s. Rapidement, il prend le jeune gardien sous son aile et lui apprend les ficelles du m&eacute;tier.  ",
	dateSortie:new Date("01-06-2016"),
	realisateur:"Boo Junfeng",
	image:"apprentice.jpg",
	extrait:"apprentice.mp4",
	_idCategorie:"3",
	note:[
	{
	_idCategorie:"1",
	note:2,
	},
	{
		_idCategorie:"2",
		note:6
	},
	{
		_idCategorie:"3",
		note:8
	},
	{
		_idCategorie:"4",
		note:1
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});

db.Film.insert({
	_idFilm:"12",
	titre:" Avant toi ",
	introduction:"Si elle est artiste dans l'&acirc;me, Louisa, n'a aucune ambition particuli&egrave;re. Elle se contente d'enchaîner les boulots pour permettre &agrave; ses proches de followdre les deux bouts. Jeune et riche banquier, Will &eacute;tait un garçon plein d'audace et d'optimisme jusqu'&agrave; ce qu'il se retrouve paralys&eacute;, suite &agrave; un accident. ",
	dateSortie:new Date("22-06-2016"),
	realisateur:"Thea Sharrock",
	image:"avant_toi.jpg",
	extrait:"avant_toi.mp4",
	_idCategorie:"3",
	note:[
	{
	_idCategorie:"1",
	note:2,
	},
	{
		_idCategorie:"2",
		note:3
	},
	{
		_idCategorie:"3",
		note:10
	},
	{
		_idCategorie:"4",
		note:1
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});


db.Film.insert({
	_idFilm:"13",
	titre:" La Belle et la B&ecirc;te  ",
	introduction:" Une nouvelle adaptation live du conte 'La Belle et la B&ecirc;te'.",
	dateSortie:new Date("29-03-2017"),
	realisateur:"Bill Condon",
	image:"la_belle_et_la_bete.jpg",
	extrait:"la_belle_et_la_bete.mp4",
	_idCategorie:"4",
	note:[
	{
	_idCategorie:"1",
	note:3,
	},
	{
		_idCategorie:"2",
		note:1
	},
	{
		_idCategorie:"3",
		note:5
	},
	{
		_idCategorie:"4",
		note:9
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});  
db.Film.insert({
	_idFilm:"14",
	titre:" Suicide Squad ",
	introduction:"C'est tellement jouissif d'&ecirc;tre un salopard ! Face &agrave; une menace aussi &eacute;nigmatique qu'invincible, l'agent secret Amanda Waller r&eacute;unit une armada de crapules de la pire esp&egrave;ce. Arm&eacute;s jusqu'aux dents par le gouvernement, ces Super-M&eacute;chants s'embarquent alors pour une mission-suicide.",
	dateSortie:new Date("03-08-2016"),
	realisateur:"David Ayer",
	image:"suicide_squad.jpg",
	extrait:"suicide_squad.mp4",
	_idCategorie:"4",
	note:[
	{
	_idCategorie:"1",
	note:5,
	},
	{
		_idCategorie:"2",
		note:1
	},
	{
		_idCategorie:"3",
		note:5
	},
	{
		_idCategorie:"4",
		note:10
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});

db.Film.insert({
	_idFilm:"15",
	titre:" Thor 3: Ragnarok ",
	introduction:"Le troisi&egrave;me volet des aventures de Thor, le h&eacute;ros au marteau.",
	dateSortie:new Date("01-11-2017"),
	realisateur:"Taika Waititi",
	image:"thor3_ragnarok.jpg",
	extrait:"thor3_ragnarok.mp4",
	_idCategorie:"4",
	note:[
	{
	_idCategorie:"1",
	note:6,
	},
	{
		_idCategorie:"2",
		note:1
	},
	{
		_idCategorie:"3",
		note:5
	},
	{
		_idCategorie:"4",
		note:8
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
}); 
   
db.Film.insert({
	_idFilm:"16",
	titre:" Doctor Strange ",
	introduction:"L'histoire d'un neurochirurgien, le Dr Stephen Strange, qui, apr&egrave;s avoir &eacute;t&eacute; victime d'un horrible accident de la route, d&eacute;couvre des dimensions parall&egrave;les et un univers fantastique. ",
	dateSortie:new Date("26-10-2016"),
	realisateur:"Scott Derrickson",
	image:"doctor_strange.jpg",
	extrait:"doctor_strange.mp4",
	_idCategorie:"4",
	note:[
	{
	_idCategorie:"1",
	note:9,
	},
	{
		_idCategorie:"2",
		note:2
	},
	{
		_idCategorie:"3",
		note:3
	},
	{
		_idCategorie:"4",
		note:9
	}
	],
	evenement:[
		{
			labelEvenement:"",
			dateEvenement:null,
			salle:{
				nomSalle:"",
				emplacement:""
			}
		}
	]
});


 db.Film.find();
 db.Film.find({_idFilm:"1"});



