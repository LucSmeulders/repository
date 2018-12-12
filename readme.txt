git installeren
github aanmelden/account aanmaken

Maak ssh-key
cmd : ssh-keygen -t rsa -b 4096 -C “your_email@example.com”

hoe git gebruiken : https://learngitbranching.js.org/
git commit  --> opslaan
git branch xxx  --> toevoegen branch
git checkout xxx  --> pointer op xxx zetten
	git checkout bugFix ^   --> relatieve referentie (1 niveau hoger)
	git checkout bugFix ~3  --> relatieve referentie (3 niveau's hoger)
git merge bugFix  --> samenvoegen
git rebase --> branch terug onder basscode plaatsen


create new repository
- rechts-boven klikken
- Your repositories
- klik op Repositories
- klik op New
- naam invullen

- open repository
- klik 'clone or download'
- copieer passphrase from account (vb git@github.com:LucSmeulders/syntra-test.git)

In dos, in een map, geef in:

git clone git@github.com:LucSmeulders/syntra-test.git
git add .  --> toevoegen alle bestanden in deze map
git commit -m "uitleg"
git push

