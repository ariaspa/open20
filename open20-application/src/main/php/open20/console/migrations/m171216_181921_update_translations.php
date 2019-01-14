<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 *
 * @package
 * @category   CategoryName
 */
use lispa\amos\core\migration\AmosMigrationTranslations;

/**
 * Class m171216_181921_update_translations
 */
class m171216_181921_update_translations extends AmosMigrationTranslations
{

    /**
     * @inheritdoc
     */
    protected function setTranslations()
    {
        return [
            self::LANG_IT => [
                [
                    'category' => 'amoscommunity',
                    'source' => 'Community',
                    'update' => true,
                    'oldTranslation' => "Community",
                    'newTranslation' => "Area di Lavoro"
                ],
                [
                    'category' => 'amoscommunity',
                    'source' => 'Add new Community',
                    'update' => true,
                    'oldTranslation' => "Aggiungi nuova Community",
                    'newTranslation' => "Aggiungi nuova Area di Lavoro"
                ],
                [
                    'category' => 'amoscommunity',
                    'source' => '#community',
                    'update' => true,
                    'oldTranslation' => "community",
                    'newTranslation' => "area di lavoro"
                ],
                [
                    'category' => 'amoscommunity',
                    'source' => '#mail_network_community_1',
                    'update' => true,
                    'oldTranslation' => "Se vuoi modificare le iscrizioni alle community,",
                    'newTranslation' => "Se vuoi modificare le iscrizioni alle aree di lavoro,"
                ],
                ['category' => 'amoscommunity', 'source' => '#mail_network_community_4', 'update' => true, 'oldTranslation' => 'Rete / Community', 'newTranslation' => "Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => '#subcommunities', 'update' => true, 'oldTranslation' => "Le sottocommunity sono community create nell’ambito di un'altra community in cui possono essere coinvolti i partecipanti appartenenti alla community principale ed altri utenti della piattaforma.", 'newTranslation' => "Le stanze sono sotto aree create nell’ambito di un'area di lavoro in cui possono essere coinvolti i partecipanti appartenenti all'area principale ed altri utenti della piattaforma.",],
                ['category' => 'amoscommunity', 'source' => ' invited you to join this community', 'update' => true, 'oldTranslation' => 'Ti invito ad accedere alla community', 'newTranslation' => "Ti invito ad accedere all'area di lavoro",],
                ['category' => 'amoscommunity', 'source' => ' of the community', 'update' => true, 'oldTranslation' => 'della community', 'newTranslation' => "dell'area di lavoro",],
                ['category' => 'amoscommunity', 'source' => '&egrave; gi&agrave; iscritto alla community', 'update' => true, 'oldTranslation' => 'è già iscritto alla community', 'newTranslation' => "è già iscritto all'area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'A community limited to members is not visible to everyone and it is possible to sign into it only on Community Manager invitation, when the invitation is accepted by the user', 'update' => true, 'oldTranslation' => 'Una community chiusa non è visibile a tutti e vi ci si può accedere solo su invito del Community Manager, quando l\'invito viene accettato dall\'utente', 'newTranslation' => "Un'area di lavoro non è visibile a tutti e vi ci si può accedere solo su invito dell'Area Manager, quando l'invito viene accettato dall'utente",],
                ['category' => 'amoscommunity', 'source' => 'A private community is visible to everyone but it is possible to sign into it only after the subscription request acceptance of the Community Manager', 'update' => true, 'oldTranslation' => 'Una community riservata è visibile a tutti ma vi ci si può accedere solo in seguito all\'acettazione della richiesta di iscrizione da parte del Community Manager', 'newTranslation' => "Un'area di lavoro è visibile a tutti ma vi ci si può accedere solo in seguito all'acettazione della richiesta di iscrizione da parte dell'Area Manager",],
                ['category' => 'amoscommunity', 'source' => 'accepted your invite to join the community', 'update' => true, 'oldTranslation' => 'Accetta il tuo invito per partecipare alla community', 'newTranslation' => "Accetta il tuo invito per partecipare all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Add communities', 'update' => true, 'oldTranslation' => 'Aggiungi communities', 'newTranslation' => "Aggiungi area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Add new Community', 'update' => true, 'oldTranslation' => 'Aggiungi nuova Community', 'newTranslation' => "Aggiungi nuova Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Add new community', 'update' => true, 'oldTranslation' => 'Aggiungi una nuova community', 'newTranslation' => "Aggiungi una nuova Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Aggiungi nuova community', 'update' => true, 'oldTranslation' => 'Aggiungi nuova community', 'newTranslation' => "Aggiungi nuova Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'All communities', 'update' => true, 'oldTranslation' => 'Tutte le community', 'newTranslation' => "Tutte le Aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'alla community', 'update' => true, 'oldTranslation' => 'alla community', 'newTranslation' => "all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Allow user to edit the community entity', 'update' => true, 'oldTranslation' => 'Permette all\'utente di modificare l\'entità community', 'newTranslation' => "Permette all'utente di modificare l'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'already joined this community ', 'update' => true, 'oldTranslation' => 'è già iscritto alla community', 'newTranslation' => "",],
                ['category' => 'amoscommunity', 'source' => 'An open community is visible to everyone and it is possible to join it without sending any authorization request', 'update' => true, 'oldTranslation' => 'Una community aperta è visibile a tutti e vi ci si può iscrivere liberamente senza richieste di autorizzazione', 'newTranslation' => "Un'Area di lavoro aperta è visibile a tutti e vi ci si può iscrivere liberamente senza richieste di autorizzazione",],
                ['category' => 'amoscommunity', 'source' => 'Are you sure to cancel your subscrition to this community?', 'update' => true, 'oldTranslation' => 'Sei sicuro di cancellare la sottoscrizione alla community?', 'newTranslation' => "Sei sicuro di cancellare la sottoscrizione all'Area di lavoro?",],
                ['category' => 'amoscommunity', 'source' => 'asked to join the community', 'update' => true, 'oldTranslation' => 'chiedi di accedere alla community', 'newTranslation' => "chiedi di accedere all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Can\'t Join Restricted Communities', 'update' => true, 'oldTranslation' => 'Non puoi partecipare a community ristrette', 'newTranslation' => "Non puoi partecipare ad Aree di lavoro ristrette",],
                ['category' => 'amoscommunity', 'source' => 'Communities are groups of people sharing interest for a specific theme area or working together for common aims', 'update' => true, 'oldTranslation' => 'Le community sono gruppi di persone che condividono l\'interesse per una determinata area tematica o che collaborano per obiettivi comuni', 'newTranslation' => "Le Aree di lavoro sono gruppi di persone che condividono l'interesse per una determinata area tematica o che collaborano per obiettivi comuni",],
                ['category' => 'amoscommunity', 'source' => 'Communities created by me', 'update' => true, 'oldTranslation' => 'Community create da me', 'newTranslation' => "Aree di lavoro create da me",],
                ['category' => 'amoscommunity', 'source' => 'Communities to validate', 'update' => true, 'oldTranslation' => 'Community da validare', 'newTranslation' => "Aree di lavoro da validare",],
                ['category' => 'amoscommunity', 'source' => 'Community', 'update' => true, 'oldTranslation' => 'Community', 'newTranslation' => "Aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Community create da me', 'update' => true, 'oldTranslation' => 'Community create da me', 'newTranslation' => "Aree di lavoro create da me",],
                ['category' => 'amoscommunity', 'source' => 'Community created successfully.', 'update' => true, 'oldTranslation' => 'Community creata correttamente.', 'newTranslation' => "Area di lavoro creata correttamente",],
                ['category' => 'amoscommunity', 'source' => 'Community dashboard', 'update' => true, 'oldTranslation' => 'Dashboard community', 'newTranslation' => "Dashboard Aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Community deleted successfully.', 'update' => true, 'oldTranslation' => 'Community cancellata correttamente.', 'newTranslation' => "Area di lavoro cancellata correttamente",],
                ['category' => 'amoscommunity', 'source' => 'Community editing in progress', 'update' => true, 'oldTranslation' => 'Modifica della community in corso', 'newTranslation' => "Modifica dell'Area di lavoro in corso",],
                ['category' => 'amoscommunity', 'source' => 'Community ID', 'update' => true, 'oldTranslation' => 'ID Community', 'newTranslation' => "ID Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Community logo', 'update' => true, 'oldTranslation' => 'Logo community', 'newTranslation' => "Logo Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Community module', 'update' => true, 'oldTranslation' => 'Modulo community', 'newTranslation' => "Modulo Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Community not created. Please, check data entry.', 'update' => true, 'oldTranslation' => 'Community non creata. Controllare l\'inserimento dei dati.', 'newTranslation' => "Area di lavoro non creata. Controllare l'inserimento dei dati.",],
                ['category' => 'amoscommunity', 'source' => 'Community not found.', 'update' => true, 'oldTranslation' => 'Community non trovata.', 'newTranslation' => "Area di lavoro non trovata",],
                ['category' => 'amoscommunity', 'source' => 'Community not updated. Please, check data entry.', 'update' => true, 'oldTranslation' => 'Community non aggiornata. Controllare l\'inserimento dei dati.', 'newTranslation' => "Area di lavoro non aggiornata. Controllare l'inserimento dei dati.",],
                ['category' => 'amoscommunity', 'source' => 'Community status will be set to editing in progress. Keep the community visible while editing it?', 'update' => true, 'oldTranslation' => 'Lo stato della community sarà impostato a modifica in corso. Si desidera che la community rimanga visibile durante la modifica?', 'newTranslation' => "Lo stato dell'Area di lavoro sarà impostato a modifica in corso. Si desidera che l'Area di lavoro rimanga visibile durante la modifica?",],
                ['category' => 'amoscommunity', 'source' => 'Community type', 'update' => true, 'oldTranslation' => 'Tipologia community', 'newTranslation' => "Tipologia Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Community type id', 'update' => true, 'oldTranslation' => 'Id tipologia community', 'newTranslation' => "Id tipologia Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Community updated successfully.', 'update' => true, 'oldTranslation' => 'Community aggiornata correttamente.', 'newTranslation' => "Area di lavoro aggiornata correttamente",],
                ['category' => 'amoscommunity', 'source' => 'COMMUNITY_MANAGER', 'update' => true, 'oldTranslation' => 'Gestore della comunità', 'newTranslation' => "Gestore dell'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Community/Organization of reference', 'update' => true, 'oldTranslation' => 'Community/Organizzazione di riferimento', 'newTranslation' => "Area di lavoro di riferimento",],
                ['category' => 'amoscommunity', 'source' => 'Consente all\'utente di modificare l\'entità Community', 'update' => true, 'oldTranslation' => 'Consente all\'utente di modificare l\'entità Community', 'newTranslation' => "Consente all'utente di modificare l'entità Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'correctly joined the community', 'update' => true, 'oldTranslation' => 'è stato correttamente iscritto alla community', 'newTranslation' => "è stato correttamente iscritto all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'correttamente iscritto alla community', 'update' => true, 'oldTranslation' => 'correttamente iscritto alla community', 'newTranslation' => "correttamente iscritto all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Create this community under the following community/organization of reference:', 'update' => true, 'oldTranslation' => 'Crea questa community sotto la seguente community/organizzazione di riferimento:', 'newTranslation' => "Crea questa Stanza sotto la seguente Area di lavoro di riferimento:",],
                ['category' => 'amoscommunity', 'source' => 'Created under the scope of community/organization:', 'update' => true, 'oldTranslation' => 'Creata nell\'ambito della community/organizzazione', 'newTranslation' => "Creata nell'ambito dell'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Dashboard community', 'update' => true, 'oldTranslation' => 'Dashboard community', 'newTranslation' => "Dashboard Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Directly accept invitation and enter into community', 'update' => true, 'oldTranslation' => 'Diretta accettazione dell\'invito e accesso alla community', 'newTranslation' => "Diretta accettazione dell'invito e accesso all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Do you wish to add community', 'update' => true, 'oldTranslation' => 'Vuoi aggiungere la community', 'newTranslation' => "Vuoi aggiungere l'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'E\' ora possibile pubblicare la community o salvarla in bozza nel caso si vogliano aggiungere ulteriori informazioni e pubblicare in un secondo momento', 'update' => true, 'oldTranslation' => 'E\' ora possibile pubblicare la community o salvarla in bozza nel caso si vogliano aggiungere ulteriori informazioni e pubblicare in un secondo momento', 'newTranslation' => "E' ora possibile pubblicare l'Area di lavoro o salvarla in bozza nel caso si vogliano aggiungere ulteriori informazioni e pubblicare in un secondo momento",],
                ['category' => 'amoscommunity', 'source' => 'Error occured while publishing community', 'update' => true, 'oldTranslation' => 'Si è verificato un errore durante della pubblicazione della community', 'newTranslation' => "Si è verificato un errore durante della pubblicazione dell'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Error occured while rejecting publication request of community', 'update' => true, 'oldTranslation' => 'Si è verificato un errore durante il rifiuto della richiesta di pubblicazione della community', 'newTranslation' => "Si è verificato un errore durante il rifiuto della richiesta di pubblicazione dell'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'getCommunitiesByUserId: userId is not a number or is not positive', 'update' => true, 'oldTranslation' => 'getCommunitiesByUserId: userId non è un numero o non è positivo', 'newTranslation' => "getCommunitiesByUserId: userId non è un numero o non è positivo",],
                ['category' => 'amoscommunity', 'source' => 'has been rejected. Community status is back to \'Editing in progress\'', 'update' => true, 'oldTranslation' => 'è stata rifiutata. Lo stato della community è tornato a \'Modifica in corso\'', 'newTranslation' => "è stata rifiutata. Lo stato dell'Area di lavoro è tornato a 'Modifica in corso'",],
                ['category' => 'amoscommunity', 'source' => 'immagine community', 'update' => true, 'oldTranslation' => 'immagine community', 'newTranslation' => "immagine Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Impossibile iscrivere l\'utente. Parametro community mancante.', 'update' => true, 'oldTranslation' => 'Impossibile iscrivere l\'utente. Parametro community mancante.', 'newTranslation' => "Impossibile iscrivere l'utente. Parametro Area di lavoro mancante.",],
                ['category' => 'amoscommunity', 'source' => 'Insert the community description', 'update' => true, 'oldTranslation' => 'Inserire la descrizione della community', 'newTranslation' => "Inserire la descrizione dell'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'invited you to join this community', 'update' => true, 'oldTranslation' => 'ti ha invitato ad entrare in questa community', 'newTranslation' => "ti ha invitato ad entrare in questa Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'invites you to join the community', 'update' => true, 'oldTranslation' => 'ti invito a partecipare alla community', 'newTranslation' => "ti invito a partecipare all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'It is not possible to subscribe the user. Missing parameter community.', 'update' => true, 'oldTranslation' => 'Non è possibile iscrivere l\'utente. Il parametro community non è presente', 'newTranslation' => "Non è possibile iscrivere l'utente. Il parametro Area di lavoro non è presente",],
                ['category' => 'amoscommunity', 'source' => 'It is now possible to publish the community or to save it as draft in order to add additional information and publish it at a leter time.', 'update' => true, 'oldTranslation' => 'E\' ora possibile pubblicare la community o salvarla in bozza nel caso si vogliano aggiungere ulteriori informazioni e pubblicare in un secondo momento.', 'newTranslation' => "E' ora possibile pubblicare la Area di lavoro o salvarla in bozza nel caso si vogliano aggiungere ulteriori informazioni e pubblicare in un secondo momento.",],
                ['category' => 'amoscommunity', 'source' => 'La community è stata pubblicata correttamente e risulta visibile nelle liste. Puoi iniziare ad invitare dei partecipanti', 'update' => true, 'oldTranslation' => 'La community è stata pubblicata correttamente e risulta visibile nelle liste. Puoi iniziare ad invitare dei partecipanti', 'newTranslation' => "L'Area di lavoro è stata pubblicata correttamente e risulta visibile nelle liste. Puoi iniziare ad invitare dei partecipanti",],
                ['category' => 'amoscommunity', 'source' => 'Le mie community', 'update' => true, 'oldTranslation' => 'Le mie community', 'newTranslation' => "Le mie Aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Modulo community', 'update' => true, 'oldTranslation' => 'Modulo community', 'newTranslation' => "Modulo Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'My communities', 'update' => true, 'oldTranslation' => 'Le mie community', 'newTranslation' => "Le mie Aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'New Community', 'update' => true, 'oldTranslation' => 'Nuova Community', 'newTranslation' => "Nuova Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'New subcommunity', 'update' => true, 'oldTranslation' => 'Nuova sotto-community', 'newTranslation' => "Nuova Stanza",],
                ['category' => 'amoscommunity', 'source' => 'NUOVA COMMUNITY', 'update' => true, 'oldTranslation' => 'NUOVA COMMUNITY', 'newTranslation' => "NUOVA AREA DI LAVORO",],
                ['category' => 'amoscommunity', 'source' => 'Publication request for community', 'update' => true, 'oldTranslation' => 'Richiesta di pubblicazione per la community', 'newTranslation' => "Richiesta di pubblicazione per l'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Publish the Community', 'update' => true, 'oldTranslation' => 'Pubblica la Community', 'newTranslation' => "Pubblica l'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Publish this Community?', 'update' => true, 'oldTranslation' => 'Pubblicare questa Community?', 'newTranslation' => "Pubblicare questa Area di lavoro?",],
                ['category' => 'amoscommunity', 'source' => 'Scegli la modalita\' di iscrizione degli utenti alla community', 'update' => true, 'oldTranslation' => 'Scegli la modalita\' di iscrizione degli utenti alla community', 'newTranslation' => "Scegli la modalita' di iscrizione degli utenti all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Send publication request for the Community', 'update' => true, 'oldTranslation' => 'Invia richiesta di pubblicazione per la Community', 'newTranslation' => "Invia richiesta di pubblicazione per l'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Send publication request for this community?', 'update' => true, 'oldTranslation' => 'Inviare richiesta di pubblicazione per questa community?', 'newTranslation' => "Inviare richiesta di pubblicazione per questa Area di lavoro?",],
                ['category' => 'amoscommunity', 'source' => 'Sign in the community to accept or reject the request.', 'update' => true, 'oldTranslation' => 'Accedi alla community per accettare o rifiutare la richiesta.', 'newTranslation' => "Accedi all'Area di lavoro per accettare o rifiutare la richiesta.",],
                ['category' => 'amoscommunity', 'source' => 'Stai lavorando nella community:', 'update' => true, 'oldTranslation' => 'Stai lavorando nella community:', 'newTranslation' => "Stai lavorando nell'Area di lavoro:",],
                ['category' => 'amoscommunity', 'source' => 'Subcommunities', 'update' => true, 'oldTranslation' => 'Sotto-community', 'newTranslation' => "Stanza",],
                ['category' => 'amoscommunity', 'source' => 'The community published successfully and it is now visible in lists. You can start inviting participants.', 'update' => true, 'oldTranslation' => 'La community è stata pubblicata correttamente e risulta visibile nelle liste. Puoi iniziare ad invitare dei partecipanti', 'newTranslation' => "L'Area di lavoro è stata pubblicata correttamente e risulta visibile nelle liste. Puoi iniziare ad invitare dei partecipanti",],
                ['category' => 'amoscommunity', 'source' => 'The request has been forwarded to community manager for approval.', 'update' => true, 'oldTranslation' => 'La richiesta è stata inoltrata al community manager per l\'approvazione.', 'newTranslation' => "La richiesta è stata inoltrata al Gestore Area per l'approvazione.",],
                ['category' => 'amoscommunity', 'source' => 'This is a root Community, there is no community/organization of reference', 'update' => true, 'oldTranslation' => 'Questa è una community principale, non ci sono altre community/organizzazioni di riferimento', 'newTranslation' => "Questa è un'Area di lavoro principale, non ci sono altre stanze di riferimento",],
                ['category' => 'amoscommunity', 'source' => 'Tipologia Community', 'update' => true, 'oldTranslation' => 'Tipologia Community', 'newTranslation' => "Tipologia Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'To accept this invitation and access the community go to community list and clisk button \'ACCEPT INVITATION\'.', 'update' => true, 'oldTranslation' => 'Per accettare l\'invito e l\'accesso alla community vai alla lista delle community', 'newTranslation' => "Per accettare l'invito e l'accesso all'Area di lavoro vai alla lista delle aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'to community', 'update' => true, 'oldTranslation' => 'alla community', 'newTranslation' => "all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Tutte le community', 'update' => true, 'oldTranslation' => 'Tutte le community', 'newTranslation' => "Tutte le Aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Unable to create community', 'update' => true, 'oldTranslation' => 'Impossibile creare la community', 'newTranslation' => "Impossibile creare l'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'View community', 'update' => true, 'oldTranslation' => 'Visualizza community', 'newTranslation' => "Visualizza Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'View Community List', 'update' => true, 'oldTranslation' => 'Vedi lista delle community', 'newTranslation' => "Vedi la lista delle Aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'View the list of communities created by me', 'update' => true, 'oldTranslation' => 'Visualizza la lista delle community create da me', 'newTranslation' => "Visualizza la lista delle Aree di lavoro create da me",],
                ['category' => 'amoscommunity', 'source' => 'View the list of communities to validate', 'update' => true, 'oldTranslation' => 'Visualizza la lista delle community da validare', 'newTranslation' => "Visualizza la lista delle Aree di lavoro da validare",],
                ['category' => 'amoscommunity', 'source' => 'View the list of my communities', 'update' => true, 'oldTranslation' => 'Visualizza la lista delle mie community', 'newTranslation' => "Visualizza la lista delle mie Aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Visualizza community', 'update' => true, 'oldTranslation' => 'Visualizza community', 'newTranslation' => "Visualizza Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Visualizza la lista delle community create da me', 'update' => true, 'oldTranslation' => 'Visualizza la lista delle community create da me', 'newTranslation' => "Visualizza la lista delle Aree di lavoro create da me",],
                ['category' => 'amoscommunity', 'source' => 'Visualizza la lista delle mie community', 'update' => true, 'oldTranslation' => 'Visualizza la lista delle mie community', 'newTranslation' => "Visualizza la lista delle mie Aree di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Welcome to community', 'update' => true, 'oldTranslation' => 'Benvenuto nella community', 'newTranslation' => "Benvenuto nella Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Welcome to the community!', 'update' => true, 'oldTranslation' => 'Bevenuto nella community!', 'newTranslation' => "Bevenuto nella Area di lavoro!",],
                ['category' => 'amoscommunity', 'source' => 'You are now a member of the community', 'update' => true, 'oldTranslation' => 'Fai ora parte della community', 'newTranslation' => "Fai ora parte dell'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'You are working within community:', 'update' => true, 'oldTranslation' => 'Stai lavorando nella community:', 'newTranslation' => "Stai lavorando nell'area di lavoro:",],
                ['category' => 'amoscommunity', 'source' => 'You Can\'t access a community you are not a member of', 'update' => true, 'oldTranslation' => 'Non puoi accedere a una community di cui non sei membro', 'newTranslation' => "Non puoi accedere a un'Area di lavoro di cui non sei membro",],
                ['category' => 'amoscommunity', 'source' => 'You Can\'t Join Communities, your profile has never been validated', 'update' => true, 'oldTranslation' => 'Non puoi entrare a far parte di community, il tuo profilo non è mai stato validato', 'newTranslation' => "Non puoi entrare a far parte di Aree di lavoro, il tuo profilo non è mai stato validato",],
                ['category' => 'amoscommunity', 'source' => 'You will be able to subscribe to community', 'update' => true, 'oldTranslation' => 'Potrai iscriverti alla community', 'newTranslation' => "Potrai iscriverti all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'You will be to subscribe to community', 'update' => true, 'oldTranslation' => 'Sarai iscritto alla community', 'newTranslation' => "Sarai iscritto all'Area di lavoro",],
                ['category' => 'amoscommunity', 'source' => 'Community to which you participate', 'update' => true, 'oldTranslation' => 'Community a cui partecipi', 'newTranslation' => "Aree di lavoro a cui partecipi",],
                ['category' => 'amoscommunity', 'source' => '#btn_new_subcommunity', 'update' => true, 'oldTranslation' => 'Nuova Sottocommunity', 'newTranslation' => "Nuova Stanza",],
                ['category' => 'amoscommunity', 'source' => '#widget_subcommunities_title', 'update' => true, 'oldTranslation' => 'Sottocommunity', 'newTranslation' => "Stanza",],
                ['category' => 'amoscommunity', 'source' => '#widget_subcommunities_description', 'update' => true, 'oldTranslation' => 'Sottocommunity', 'newTranslation' => "Stanza",],
                ['category' => 'amoscommunity', 'source' => '#new_subcommunity', 'update' => true, 'oldTranslation' => 'Nuova Sottocommunity', 'newTranslation' => "Nuova Stanza",],
                ['category' => 'amoscommunity', 'source' => '#subcommunities_in', 'update' => true, 'oldTranslation' => 'Sottocommunity in', 'newTranslation' => "Stanze in",],
                ['category' => 'amoscommunity', 'source' => '#welcome_to_subcommunity', 'update' => true, 'oldTranslation' => 'Benvenuto nella sottocommunity!', 'newTranslation' => "Benvenuto nella Stanza",],
                ['category' => 'amoscommunity', 'source' => '#working_in_subcommunity', 'update' => true, 'oldTranslation' => 'Stai lavorando nella sottocommunity:', 'newTranslation' => "Stai lavorando nella Stanza:",]]
        ];
    }
}