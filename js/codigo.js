$(document).ready(inicio)
function inicio() {
    $(".btn_anade").click(anade);
}
function anade() {
    $("#carritocomp").append($(this).val());
    
}