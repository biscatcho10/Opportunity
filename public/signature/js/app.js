	/*
 * on signature type
 */
$(".signature-input").keyup(function() {
    textSignature = $(this).val();
    if (textSignature == "") {
        textSignature = "Your Name";
    }
    $(".text-signature").text(textSignature);
})

/*
 * change signature style
 */
$(".signature-style").change(function() {
    var signatureStyle = $(this).val();
    $(".text-signature").css("font-style", signatureStyle);
})

/*
 * change signature color
 */
function updateSignatureColor(color) {
    $(".text-signature").css("color", "#"+color);
    $(".signature-color").css("color", "#"+color);
}

/*
 * change signature weight
 */
$(".signature-weight").change(function() {
    var signatureWeight = $(this).val();
    $(".text-signature").css("font-weight", signatureWeight);
})

/*
 * change signature font
 */
$(".signature-font").change(function() {
    var signatureFont = $(this).val();
    $(".text-signature").css("font-family", signatureFont);
})

/*
 * on stroke size click
 */
$("#signature-stroke").click(function() {
    stroke = parseInt($(this).attr("stroke"));
    if (stroke == 3) {
        updateStroke(5);
    }else if(stroke == 5){
        updateStroke(7);
    }else if(stroke == 7){
        updateStroke(3);
    }
});

/*
 * update stroke
 */
 function updateStroke(stroke){
    modules.stroke(stroke);
    $("#signature-stroke").attr("stroke", stroke);
 }

/*
 * change signature font
 */
$(".save-signature").click(function() {
    signatureType = $("#updateSignature .head-links").find("li.active").attr("type");
    if (signatureType === "capture") {
        saveTextSignature();
    }else if(signatureType === "upload"){
        saveUploadSignature();
    }else if(signatureType === "draw"){
        saveSignature($('#create-signature').getCanvasImage('png'));
    }
});

$(document).on('click','.btnsave',function (e){
	domtoimage.toPng(document.getElementById('text-signature'), { quality: 0.95 })
    .then(function (dataUrl) {
        var link = document.createElement('a');
        link.download = 'my-image-name.png';
        link.href = dataUrl;
		link.click();
		console.log(dataUrl)
		anchor = $("#signatureText");
            anchor.val(dataUrl);
		$("#signform").submit();
    });
});
</script>
