var sessionstarted = true;
var DEBUG = false;

function js_getElementById(id)
{
    var obj = null; 
    if (document.all[id])
        obj = document.all[id]; 
    else if (document.getElementById)
        obj = document.getElementById(id); 
    else if (document.all)
        obj = document.all[id]; 
    return obj; 
}

function js_callserverfunction(id, targetdiv, parameters, formtosubmit)
{
    // var div = js_getElementById(targetdiv);
    // if (div != null) 
    // {
    //     div.style.cursor = "wait";
    // }
    // var formparameters='';
    // //agent.call("ajaxhandler.php","php_buildhtml","js_cb_buildhtml", id, targetdiv, parameters, formparameters);
    
    // // jquery port of ajax agent
    // $.ajax({
    //        url: "ajaxhandler.php",
    //        data: {
    //              jq_id: id,
    //              jq_targetdiv: targetdiv,
    //              jq_parameters: parameters,
    //              jq_formparameters: formparameters
    //              },
    //        success: function(data, status) {
    //                      if (status == 'success') {
    //                          js_cb_buildhtml(data);
    //                      }
    //                 },
    //        type: 'POST',
    //        dataType: 'json',
    //        cache: false
    //        });
}


function js_cb_buildhtml(result)
{
    if (result != null) 
    {
        targetdiv = '';
        html      = null;
        try 
        {
            for (i=0; i<result.length; i++)
            {
                if (result[i][0] == "targetdiv")
                    targetdiv  = result[i][1];
                if (result[i][0] == "html")
                {
                    var subhtml = result[i][1].replace(/~/gi,'"');
                    if (result[i][2] != null)
                    {   
                        if (result[i][2] != "")
                        {
                            var div = js_getElementById(result[i][2]);
                            if ((div != null) && (subhtml != null))
                            {
                                div.style.cursor = "default";
                                div.style.filter = "";
                                div.style.border = "none";
                                if (div.style.visibility != "hidden")
                                {
                                    div.innerHTML = subhtml;
                                    div.style.backgroundColor = "transparent";
                                }
                            }
                        }
                        else
                            html = subhtml;
                    }
                    else
                        html = subhtml;
                }
            }
        }
        catch(e)
        {
            if (DEBUG)
                alert(result);
            else
                alert('Internal error. Please report to MISD.x     ' + result);
        }
        if (targetdiv  != '')
        {
            var div = js_getElementById(targetdiv);
            if (div != null)
            {
                div.style.cursor = "default";
                div.style.filter = "";
                div.style.border = "none";
                if ((html != null) && (div.style.visibility != "hidden"))
                {
                    div.innerHTML = html;
                    //div.style.backgroundColor = "transparent";
                    if (targetdiv.substr(0,3) == "POP")
                        js_showmodal(true);
                }
            }
        }
        try 
        {
            for (i=0; i<result.length; i++)
            {
                if (result[i][0] == "eval")
                {
                    eval(result[i][1]);
                }
            }
        }
        catch (e)
        {
        }
    }
}

function js_hidediv(targetdiv)
{
    if (targetdiv == 'POP_WIN1') {
        $('#myModal').modal('hide');
        return;
    }
    var div = js_getElementById(targetdiv);
    if (div != null) 
        {
            js_showmodal(false);
            div.style.visibility = "hidden";
            div.innerHTML = "";
        }
}

function js_hideloadingdiv(targetdiv)
{
    var div = js_getElementById(targetdiv);
    if (div != null) 
        {
            if (div.innerHTML.substring(0,11).toLowerCase() == "<div></div>")
            {
                js_showmodal(false);
                div.style.visibility = "hidden";
                div.innerHTML = "";
            }
        }
}

function js_showmodal(show)
{
}

function js_showdiv(targetdiv, height)
{
    var div = js_getElementById(targetdiv);
    if (div != null) 
    {
        if (targetdiv == 'POP_WIN1') {
            $('#myModal').modal('show');
        }
        else {
            div.style.visibility = "visible";
            w = parseInt(div.style.width);
            h = parseInt(div.style.height);
            div.style.left  = ((screen.availWidth - w)  / 2) + 'px';
            div.style.top =  '130px';
            div.style.backgroundColor = "#ffffff";        
            div.style.filter = "alpha(opacity=90)";
            if (!isNaN(height))
                div.style.height = height + 'px';
        }
        return div;
    }
    return null;
}

function js_loadpopup(id, targetdiv, parameters, height)
{
    var div = js_showdiv(targetdiv, height);
    if (div != null) 
    {
        
        div.innerHTML = 'Loading content...';
        __closablemodal = true;
        js_callserverfunction(id, targetdiv, parameters);
    }
}

function js_focus(id)
{
    var obj = js_getElementById(id);    
    if (obj != null)
    {
        obj.focus();
        // Required for dynamic forms. ????
        // 04/10/2007-CSN
        obj.focus(); 
    }
}

function js_setdisplaystyle(targetdiv, style)
{
    var div = js_getElementById(targetdiv);
    if (div != null) 
        {
            div.style.display = style;
        }
}