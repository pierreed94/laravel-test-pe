<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Demande d'information</h2>

<ul>
    <li><strong>Nom</strong> : {{ $contact['name'] }}</li>
    <li><strong>Prénom</strong> : {{ $contact['firstname'] }}</li>
    <li><strong>Email</strong> : {{ $contact['email'] }}</li>
    <li><strong>Objet</strong> : {{ $contact['topic'] }}</li>
    <li><strong>Message</strong> : {{ $contact['message'] }}</li>
</ul>
</body>
</html>
