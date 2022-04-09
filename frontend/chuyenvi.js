var matrixA =[];
$('#matrix').submit((e)=>{
    e.preventDefault()
    convertMatrix(3,3)
    $.ajax({
        method: "POST",
        url: "/project/backend/chuyenvi.php",
        data: { matrixA}
    })
        .done(function(msg){
            if(msg !== 'err'){
                var matrix = JSON.parse(msg);
                $('#result').html("\\[");
                var string ="";
                string += drawMatrix(matrixA);
                string += '=';
                string += drawMatrix(matrix);
                string += '\\]';
                $('#result').append(string);
                MathJax.typesetPromise();
            }
        });
});
function convertMatrix(ha,ca){
    var temp = $(".A")
    .map(function(){
        return $(this).val();
    }).get();
    var ind = 0;
    var res = [];
    for (i = 0; i< ha; i++){
        var a = [];
        for (j = 0; j< ca; j++){
            a.push(temp[ind++]);
        }
        res.push(a);
    }
    matrixA = [...res];
}
function drawMatrix(matrix){
    var string = `\\begin{vmatrix}`
    matrix.map(row => {
        for (i = 0; i < row.length - 1; i++)
            string += row[i] + '&';
        string += row[row.length -1] + '\\\\'    
    })
    string += `\\end{vmatrix}`
    return string
}