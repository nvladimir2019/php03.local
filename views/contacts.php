<h1>Contacts</h1>
<div>
    <ul>
        <h3>Телефон</h3>
        <?php foreach ($ph as $key=>$value): ?>
            <li><?=$key."  :  ".$value?></li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <h3>Адрес</h3>
        <?php foreach ($adr as $key=>$value): ?>
            <li><?=$key."  :  ".$value?></li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <h3>e-mail</h3>
        <?php foreach ($eml as $key=>$value): ?>
            <li><?=$key."  :  ".$value?></li>
        <?php endforeach; ?>
    </ul>
</div>



<link rel="stylesheet" href="/resources/css/contacts.css">