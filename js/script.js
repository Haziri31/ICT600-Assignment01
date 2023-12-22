function handleFormNull ()
{
    setTimeout (function ()
    {
        if (confirm ("You have not filled in the form. Go back to the form page?"))
        {
            // Redirect to formCreate.php using Absolute URL
            // window.location.href = "http://localhost/ICT600/Assignment/php/formCreate.php";
            window.location.href = "formCreate.php";
        }
    }, 650);
    document.write ("<br><h2>Form Submission Fail</h2><br>");
}

function handleFormSuccess ()
{
    alert ("Successful submission! ✅");
}

function handleFormFail ()
{
    alert ("Fail submission! ❌");
}