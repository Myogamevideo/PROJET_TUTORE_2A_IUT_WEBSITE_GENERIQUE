// Liste des mois
var monthList = new Array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aôut', 'septembre', 'octobre', 'novembre', 'décembre');
// Liste des jours de la semaine
var dayList = new Array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
// Date actuelle
var today = new Date();
today.setHours(0,0,0,0);
// Mois actuel
var currentMonth = new Date(today.getFullYear(), today.getMonth(), 1);
var content = document.createElement('div');
var monthDiv = document.createElement('div');

var domElement;
class Calendar
{
    constructor(domTarget)
    {
        // On récupère l'élément DOM passé en paramètre
        domElement = document.querySelector(domTarget);

        // Renvoit une erreur si l'élément n'éxiste pas
        if(!domElement) throw "Calendar - L'élément spécifié est introuvable";

        // On créé le div qui contiendra l'entête de notre calendrier
        let header = document.createElement('div');
        header.classList.add('header');
        domElement.appendChild(header);

        // On créé le div qui contiendra les jours de notre calendrier
        domElement.appendChild(content);

        // Bouton "précédent"
        let btnDiv1 = document.createElement('div');
        let previousButton = document.createElement('button');
        previousButton.setAttribute('data-action', '-1');
        previousButton.textContent = '\u003c';
        btnDiv1.appendChild(previousButton);
        header.appendChild(btnDiv1);

        // Div qui contiendra le mois/année affiché
        monthDiv.classList.add('month');
        header.appendChild(monthDiv);

        // Bouton "suivant"
        let btnDiv2 = document.createElement('div');
        let nextButton = document.createElement('button');
        nextButton.setAttribute('data-action', '1');
        nextButton.textContent = '\u003e';
        btnDiv2.appendChild(nextButton);
        header.appendChild(btnDiv2);

        // Action des boutons "précédent" et "suivant"
        domElement.querySelectorAll('button').forEach(element =>
        {
            element.addEventListener('click', () =>
            {
                currentMonth.setMonth(currentMonth.getMonth() * 1 + element.getAttribute('data-action') * 1);
                loadMonth(currentMonth);
                jourChoisie(currentMonth);

            });
        });

        // On charge le mois actuel
        loadMonth(currentMonth);
        jourChoisie(currentMonth);

    }
}
    

const calendar = new Calendar('.calendar');
this.jourChoisie(currentMonth);


function loadMonth(date)
{
    // On vide notre calendrier
    content.textContent = '';

    // On ajoute le mois/année affiché
    monthDiv.textContent = monthList[date.getMonth()].toUpperCase() + ' ' + date.getFullYear();

    // Création des cellules contenant le jour de la semaine
    for(let i=0; i<dayList.length; i++)
    {
        let cell = document.createElement('span');
        cell.classList.add('cell');
        cell.classList.add('day');
        cell.textContent = dayList[i].substring(0, 3).toUpperCase();
        content.appendChild(cell);
    }

    // Création des cellules vides si nécessaire
    for(let i=0; i<date.getDay(); i++)
    {
        let cell = document.createElement('span');
        cell.classList.add('cell');
        cell.classList.add('empty');
        content.appendChild(cell);
    }

    // Nombre de jour dans le mois affiché
    let monthLength = new Date(date.getFullYear(), date.getMonth()+1, 0).getDate();

    // Création des cellules contenant les jours du mois affiché
    for(let i=1; i<=monthLength; i++)
    {
        let cell = document.createElement('span');
        cell.classList.add('cell');
        cell.textContent = i;
        content.appendChild(cell);

        // Timestamp de la cellule
        let timestamp = new Date(date.getFullYear(), date.getMonth(), i).getTime();

        // Ajoute une classe spéciale pour aujourd'hui
        if(timestamp === today.getTime())
        {
            cell.classList.add('today');
        }
    }
}



function recupererDateDuJour(){
    // Ajoute une classe spéciale pour aujourd'hui
    let dateselectionner = document.querySelector('.today');
    if(dateselectionner!=null){
        dateselectionner.classList.remove('today');
    }
}

function jourChoisie(date){

    let cellChoisie = document.querySelectorAll('.cell');
    let dayChoisie = document.querySelectorAll('.day');
    cellChoisie.forEach(function(currentBtn){
        currentBtn.addEventListener('click', function(){
            recupererDateDuJour();
            logMessage(dayChoisie.textContent);
            var bla = monthList[date.getMonth()].toUpperCase() + ' ' + date.getFullYear();
            document.querySelector('.jourChoisie').innerHTML = "Rendez-vous pour le " + currentBtn.textContent +" " + bla;
            currentBtn.classList.add('today');
            document.querySelector('table').setAttribute('class','width');
            document.querySelector('.submit').setAttribute('class','width');
        });
    });
    
}


function logMessage(message) {
	console.log(message);
}



