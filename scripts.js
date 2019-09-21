$( document ).ready(function() {
    document.getElementById("recheck").onclick = getDroplet;
    document.getElementById("start").onclick = startDroplet;
    document.getElementById("dsetroy").onclick = destroyDroplet;
    document.getElementById("rerun").onclick = rerun;
})



function startDroplet(){
    $.ajax({
        url:'create.php',
        data: '',
        type:'GET',
        success: function(data) {
            // data is ur summary
            $('#myDiv').html(data);
        },
        error:function(error) {
            console.log(error) // No successful request
        }
    });
}

function destroyDroplet(){
    $.ajax({
        url:'destroy.php',
        data: '',
        type:'GET',
        success: function(data) {
            // data is ur summary
            $('#myDiv').html(data);
        },
        error:function(error) {
            console.log(error) // No successful request
        }
    });
}

function rerun(){
    $.ajax({
        url:'rerun.php',
        data: '',
        type:'GET',
        success: function(data) {
            // data is ur summary
            $('#myDiv').html(data);
        },
        error:function(error) {
            console.log(error) // No successful request
        }
    });
}

function mycode(){
    $.ajax({
        url:'code.php',
        data: '',
        type:'GET',
        success: function(data) {
            // data is ur summary
            $('#mycode').html(data);
        },
        error:function(error) {
            console.log(error) // No successful request
        }
    });
}
function getDroplet(){
    $.ajax({
        url:'droplet.php',
        data: '',
        type:'GET',
        success: function(data) {
            // data is ur summary
            $('#myDiv').html(data);
        },
        error:function(error) {
            console.log(error) // No successful request
        }
    });
    mycode();
}