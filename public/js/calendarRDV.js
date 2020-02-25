class CalendarRDV {
        constructor(domTarget)
        {
            // On récupère l'élément DOM passé en paramètre
            this.domElement = document.querySelector(domTarget);

            // Renvoit une erreur si l'élément n'éxiste pas
            if(!this.domElement) throw "Calendar - L'élément spécifié est introuvable";

            // Liste des jours de la semaine
            this.dayList = new Array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');

            // Date actuelle
            this.today = new Date();
            this.today.setHours(0,0,0,0);

            // Mois actuel
            this.currentMonth = new Date(this.today.getFullYear(), this.today.getMonth(), 1);

            // On créé le div qui contiendra l'entête de notre calendrier
            let header = document.createElement('div');
            header.classList.add('header');
            this.domElement.appendChild(header);

            // On créé le div qui contiendra les jours de notre calendrier
            this.content = document.createElement('div');
            this.domElement.appendChild(this.content);

            // Création des cellules contenant le jour de la semaine
            for(let i=0; i<this.dayList.length; i++)
            {
                let cell = document.createElement('span');
                cell.classList.add('cell');
                cell.classList.add('day');
                cell.textContent = this.dayList[i].substring(0, 3).toUpperCase();
                header.appendChild(cell);
            }

            // On charge le mois actuel
            this.loadMonth(this.currentMonth);
        }

        loadMonth(date)
        {
            // On vide notre calendrier
            this.content.textContent = '';



            // Création des cellules vides si nécessaire
            for(let i=0; i<date.getDay(); i++)
            {
                let cell = document.createElement('span');
                cell.classList.add('cell');
                cell.classList.add('empty');
                this.content.appendChild(cell);
            }

            // Nombre de jour dans le mois affiché
            let monthLength = new Date(date.getFullYear(), date.getMonth()+1, 0).getDate();

            // Création des cellules contenant les jours du mois affiché
            for(let i=1; i<=monthLength; i++)
            {
                let cell = document.createElement('span');
                cell.classList.add('cell');
                cell.textContent = i;
                this.content.appendChild(cell);

                // Timestamp de la cellule
                let timestamp = new Date(date.getFullYear(), date.getMonth(), i).getTime();

                // Ajoute une classe spéciale pour aujourd'hui
                if(timestamp === this.today.getTime())
                {
                    cell.classList.add('today');
                }
            }
        }
    }


const calendrier = new CalendarRDV('.calendar2');
