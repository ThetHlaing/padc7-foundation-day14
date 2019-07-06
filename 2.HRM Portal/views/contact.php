<div>Contact Page</div>

<?php foreach($contact_list as $contact){
    echo '<div>'.$contact.'</div>';
}?>
<div>
    Contact form here
</div>

<form method="POST" action="/contact">
    <input name="name"/>
    <button type="submit">Submit</button>
</form>