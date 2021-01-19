@extends('layouts.app')
@section('css')
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
<style>
    #canvasDiv{
    position: relative;
    border: 2px dashed grey;
    height:300px;
    }
</style>
	<!--Internal   Notify -->
<!-- Signer CSS -->
<link href="{{ URL::asset('signature/css/style.css') }}" rel="stylesheet">
<script src="{{ URL::asset('signature/js/jscolor.js') }}"></script>
<link href="https://fonts.googleapis.com/css?family=B612+Mono:400,400i,700|Charm:400,700|EB+Garamond:400,400i,700|Noto+Sans+TC:400,700|Open+Sans:400,400i,700|Pacifico|Reem+Kufi|Scheherazade:400,700|Tajawal:400,700&amp;subset=arabic" crossorigin="anonymous" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Cookie|Courgette|Dr+Sugiyama|Grand+Hotel|Great+Vibes|League+Script|Meie+Script|Miss+Fajardose|Niconne|Pacifico|Petit+Formal+Script|Rochester|Sacramento|Tangerine" crossorigin="anonymous" rel="stylesheet">
<!-- Bootstrap CSS -->
@endsection

@section('content')

{{-- @include('site.includes.dark_nav2') --}}

@if (session()->has('success'))
    <script>
        window.onload = function() {
            notif({
                msg: "{{session()->get('success')}}",
                type: "success"
            })
        }
    </script>
@endif

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="tabs-menu ">
                <!-- Tabs -->
                <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                    <li class="active">
                        <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">ABOUT ME</span> </a>
                    </li>
                    <li class="">
                        <a href="#profile" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span> <span class="hidden-xs">Signature Pad</span> </a>
                    </li>
                    <li class="">
                        <a href="#textSign"  data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span> <span class="hidden-xs">Signature Text</span> </a>
                    </li>
                    <li class="">
                        <a href="#uploadSign"  data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span> <span class="hidden-xs">Upload Signature</span> </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                <div class="tab-pane active" id="home">
                    <h4 class=" text-left ">Please Complete Register</h4>
                   <p class="text-left"> Give Me Signature You can write it using one of three options </p>
                   <p class="text-left"> - Signature Pad</p>
                    <p class="text-left">- Signature Text</p>
                    <p class="text-left">- Upload Signature</p>



                </div>

                <div class="tab-pane " id="uploadSign">
                    <h4 class=" text-center ">Upload Signature</h4>
                   <form action="{{route('upload.save')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="col-sm-12 col-md-12">
                           <input type="file" name="signature" class="dropify" accept=",.jpg, .png, image/jpeg, image/png"
                                  data-height="70" />

                       </div><br>

                       <div class="d-flex justify-content-center">
                           <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                       </div>

                   </form>



                </div>
                <div class="tab-pane" id="profile">
                    <div class="row">
                        <div class="col-sm-4">
                                <h4 class="text-center ">Add Signture</h4>
                                <br>
                                <div id="canvasDiv"></div>
                                <br>
                                <img id="download" src=""  download="image.png">
                                <button type="button" class="btn btn-danger" id="reset-btn">Clear</button>
                                <button type="button" class="btn btn-success" onClick="download()" id="btn-save">Save</button>
                            <form id="signatureform" action="{{route('saveSign.add') }}" style="display:none" method="post">
                                @csrf
                                <input type="hidden" id="signature" name="signature">
                                <input type="hidden" name="signaturesubmit" value="1">
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="textSign">
                        <div class="row">
                            <div class="col-sm-12">
                                    <h3 class="text-center">Signture Text</h3>
                                    <br>

                                    <form method="post" action="{{ route('signText.save')}}" id="signform">
                                        @csrf
                                        <input type="hidden" id="signatureText" name="signature">

                                        <div class="form-group">
                                          <div class="row">
                                              <div class="col-md-6">
                                                <label>Type your signature</label>
                                                <input type="text" class="form-control signature-input" name="" placeholder="Type your signature" maxlength="18" value="Your Name">
                                              </div>
                                              <div class="col-md-6">
                                                <label>Select font</label>
                                                <select class="form-control signature-font" name="">
                                                    <option value="Lato">Lato</option>
                                                    <option value="Miss Fajardose">Miss Fajardose</option>
                                                    <option value="Meie Script">Meie Script</option>
                                                    <option value="Petit Formal Script">Petit Formal Script</option>
                                                    <option value="Niconne">Niconne</option>
                                                    <option value="Rochester">Rochester</option>
                                                    <option value="Tangerine">Tangerine</option>
                                                    <option value="Great Vibes">Great Vibes</option>
                                                    <option value="Berkshire Swash">Berkshire Swash</option>
                                                    <option value="Sacramento">Sacramento</option>
                                                    <option value="Dr Sugiyama">Dr Sugiyama</option>
                                                    <option value="League Script">League Script</option>
                                                    <option value="Courgette">Courgette</option>
                                                    <option value="Pacifico">Pacifico</option>
                                                    <option value="Cookie">Cookie</option>
                                                    <option value="Grand Hotel">Grand Hotel</option>
                                                </select>
                                              </div>
                                          </div>

                                      </div>
                                        <div class="form-group">
                                          <div class="row">
                                              <div class="col-md-4">
                                                <label>Weight</label>
                                                <select class="form-control signature-weight" name="">
                                                    <option value="normal">Regular</option>
                                                    <option value="bold">Bold</option>
                                                    <option value="lighter">Lighter</option>
                                                </select>
                                              </div>
                                              <div class="col-md-4">
                                                <label>Color</label>
                                                <input  class="form-control signature-color jscolor { valueElement:null,borderRadius:'1px', borderColor:'#e6eaee',value:'000000',zIndex:'99999', onFineChange:'updateSignatureColor(this)'}" readonly="">
                                              </div>
                                              <div class="col-md-4">
                                                <label>Style</label>
                                                <select class="form-control signature-style" name="">
                                                    <option value="normal">Regular</option>
                                                    <option value="italic">Italic</option>
                                                </select>
                                              </div>
                                          </div>
                                        </div>
                                    <div class="divider"></div>
                                    <h4 class="text-center">Preview</h4>
                                    <div class="text-signature-preview">
                                        <div class="text-signature" name="text" id="text-signature" style="color: #000000">Your Name</div>
                                    </div>
                                    <br>
                                    <input type="button" class="btn btn-primary form-control btnsave" id="btn" value="Add Signature">
                                  </form>

                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    $(document).ready(() => {
        var canvasDiv = document.getElementById('canvasDiv');
        var canvas = document.createElement('canvas');
        canvas.setAttribute('id', 'canvas');
        canvas.type='file';

        canvasDiv.appendChild(canvas);
        $("#canvas").attr('height', $("#canvasDiv").outerHeight());
        $("#canvas").attr('width', $("#canvasDiv").width());
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }

        context = canvas.getContext("2d");
        $('#canvas').mousedown(function(e) {
            var offset = $(this).offset()
            var mouseX = e.pageX - this.offsetLeft;
            var mouseY = e.pageY - this.offsetTop;

            paint = true;
            addClick(e.pageX - offset.left, e.pageY - offset.top);
            redraw();
        });

        $('#canvas').mousemove(function(e) {
            if (paint) {
                var offset = $(this).offset()
                //addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
                addClick(e.pageX - offset.left, e.pageY - offset.top, true);
                console.log(e.pageX, offset.left, e.pageY, offset.top);
                redraw();
            }
        });

        $('#canvas').mouseup(function(e) {
            paint = false;
        });

        $('#canvas').mouseleave(function(e) {
            paint = false;
        });

        var clickX = new Array();
        var clickY = new Array();
        var clickDrag = new Array();
        var paint;

        function addClick(x, y, dragging) {
            clickX.push(x);
            clickY.push(y);
            clickDrag.push(dragging);
        }

        $("#reset-btn").click(function() {
            context.clearRect(0, 0, window.innerWidth, window.innerWidth);
            clickX = [];
            clickY = [];
            clickDrag = [];
        });

        $(document).on('click', '#btn-save', function() {
            var mycanvas = document.getElementById('canvas');
            var download = document.getElementById("download");
           var image = document.getElementById("canvas").toDataURL("image/png")
                       .replace("image/png", "image/octet-stream");
          data = download.src=image;
            //var canvas_img_data = mycanvas.toDataURL('image/png');
            console.log(data);
            anchor = $("#signature");
            anchor.val(data);
            $("#signatureform").submit();
        });

        var drawing = false;
        var mousePos = {
            x: 0,
            y: 0
        };
        var lastPos = mousePos;

        canvas.addEventListener("touchstart", function(e) {
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var mouseEvent = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchend", function(e) {
            var mouseEvent = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchmove", function(e) {

            var touch = e.touches[0];
            var offset = $('#canvas').offset();
            var mouseEvent = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);



        // Get the position of a touch relative to the canvas
        function getTouchPos(canvasDiv, touchEvent) {
            var rect = canvasDiv.getBoundingClientRect();
            return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
            };
        }


        var elem = document.getElementById("canvas");

        var defaultPrevent = function(e) {
            e.preventDefault();
        }
        elem.addEventListener("touchstart", defaultPrevent);
        elem.addEventListener("touchmove", defaultPrevent);

        function redraw() {
            //
            lastPos = mousePos;
            for (var i = 0; i < clickX.length; i++) {
                context.beginPath();
                if (clickDrag[i] && i) {
                    context.moveTo(clickX[i - 1], clickY[i - 1]);
                } else {
                    context.moveTo(clickX[i] - 1, clickY[i]);
                }
                context.lineTo(clickX[i], clickY[i]);
                context.closePath();
                context.stroke();
            }
        }
    })
</script>


<script src="{{ URL::asset('signature/js/dom-to-image.min.js') }}"></script>


<!--Internal  Form-elements js-->
<script>
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

@endsection
