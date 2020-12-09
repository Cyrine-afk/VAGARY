function verif ()
{
    var error="<ul>";
    var toterr=0;

    //name
    var name_inf=document.getElementById("name_inf").value;
    if(name_inf.charAt(0)<"A" || name_inf.charAt(0)>"Z")
    {
        toterr++;
       error+="<li> The name must start with an uppercase letter </li>";
    }

    //last name
    var lastName_inf=document.querySelector("#lastName_inf").value ;
    if (lastName_inf.charAt(0)<"A" || lastName_inf.charAt(0) > "Z"){
        toterr++;
        error+="<li> The last name must start with an uppercase letter </li>"
    }

    //date
    var dateAjout_inf=document.getElementById("dateAjout_inf").value 
    if (dateAjout_inf=="") {
        toterr++;
        error+="<li> The date is obligatory </li>"
    }
    else 
    {
        var today = new Date();
        dateA=new Date(dateA)
        if(today.getFullYear() > 2) {
            toterr++;
            error+="<li> Incorrect date </li>"
        }
    }

    document.querySelector("#error").style.color="red"
    error+="</ul>"
    document.getElementById("error").innerHTML=error


}