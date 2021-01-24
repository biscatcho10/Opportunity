@extends('layouts.app')

@section('title', 'PDF Page')

@section('css')
    <style>
        @media print {
            #print_Button {
                display: none;
            }
        }
    </style>
@endsection


@section('content')

@include('site.includes.dark_nav1')

<div class="container mt-5" style="margin: 20px auto; padding: 0px 80px; border: 1px solid rgb(102, 51, 153);" id="print">
    <h5 class="text-center mt-3">Confidential</h5>

   <h4 class="text-center" style="margin: 35px 0px;">MUTUAL NON-DISCLOSURE AGREEMENT</h4>

   <pre>
       This Mutual Non-Disclosure Agreement (the “Agreement”) is made as of <span class="text-danger"><u>{{$date}}</u></span> (the
       “Effective Date”) in connection with a business relationship between X, having a place of, and
       <span class="text-danger"><u>{{$profile->prefix . " " .$user->first_name . " " . $user->last_name}}</u></span> having         a        place       of       business at
       _____<span class="text-danger"><u>{{$profile->str_add_one . " ," .$profile->str_add_two . " ," . $profile->city . " " . $profile->zip . " ," .$profile->country }}</u></span>. The Party disclosing and
       the Party receiving the Confidential Information (as defined below) are hereinafter referred to as
       the “disclosing party” and “receiving party”, respectively. In consideration of any disclosure,
       any negotiations concerning a proposed business relationship, the Parties agree to the following:
   </pre>

   <pre class="mt-3 ml-5">
   1.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis, est et dignissim
       pretium, diam massa efficitur nunc, non viverra mauris elit ac lectus. Interdum et
       malesuada fames ac ante ipsum primis in faucibus. Nunc dignissim felis vitae leo
       scelerisque, vitae consequat nibh pellentesque. Duis maximus ante vitae erat placerat
       consectetur. Suspendisse tempor at magna non mollis. Phasellus aliquet libero eget diam
       interdum, nec vulputate ipsum scelerisque. Vivamus pretium massa nec luctus mattis.
       Mauris venenatis ullamcorper quam a tristique. Morbi bibendum est sit amet cursus
       viverra. Maecenas et iaculis dolor, eget dapibus arcu. Phasellus ac lacinia felis, in egestas
       turpis. Suspendisse blandit metus ac urna fermentum, vitae fringilla diam scelerisque.
       Nam non luctus sapien. Sed nunc nunc, dictum at enim sed, consequat pulvinar velit.

   2.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis, est et dignissim
       pretium, diam massa efficitur nunc, non viverra mauris elit ac lectus. Interdum et
       malesuada fames ac ante ipsum primis in faucibus. Nunc dignissim felis vitae leo
       scelerisque, vitae consequat nibh pellentesque. Duis maximus ante vitae erat placerat
       consectetur. Suspendisse tempor at magna non mollis. Phasellus aliquet libero eget diam
       interdum, nec vulputate ipsum scelerisque. Vivamus pretium massa nec luctus mattis.
       Mauris venenatis ullamcorper quam a tristique. Morbi bibendum est sit amet cursus
       viverra. Maecenas et iaculis dolor, eget dapibus arcu. Phasellus ac lacinia felis, in egestas
       turpis. Suspendisse blandit metus ac urna fermentum, vitae fringilla diam scelerisque.
       Nam non luctus sapien. Sed nunc nunc, dictum at enim sed, consequat pulvinar velit

   York, United States of America. The obligations imposed by this Agreement shall not apply to
   any Confidential Information of the other party that:

       a.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis, est et
           dignissim pretium, diam massa efficitur nunc, non viverra mauris elit ac lectus.
           Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc dignissim felis
           vitae leo scelerisque, vitae consequat nibh pellentesque. Duis maximus ante vitae
           erat placerat consectetur. Suspendisse tempor at magna non mollis. Phasellus
           aliquet libero eget diam interdum, nec vulputate ipsum scelerisque. Vivamus
           pretium massa nec luctus mattis. Mauris venenatis ullamcorper quam a tristique.
           Morbi bibendum est sit amet cursus viverra. Maecenas et iaculis dolor, eget dapibus
           arcu. Phasellus ac lacinia felis, in egestas turpis. Suspendisse blandit metus ac urna
           fermentum, vitae fringilla diam scelerisque. Nam non luctus sapien. Sed nunc nunc,
           dictum at enim sed, consequat pulvinar velit



   </pre>

   <div class="rest" style="padding: 0px 80px;">
       <h4>ACKNOWLEDGED AND AGREED:</h4>

       <pre class="mt-3">X, LLC</pre>
       <pre class="mt-5 " style="margin-left: -120px;">
           By:{{$user->first_name . " " . $user->last_name}}
           Name: X G.

           Title: Principal


           By:{{$user->first_name . " " . $user->last_name}}
           Name:

           Company:{{$profile->title}}

           Title:

           <img src="{{ auth()->user()->signature->signature }}" class="img-fluid"  width="150px" style="margin-top: -60px" alt="The Signature">

       </pre>
   </div>

   <div class="row mb-4">
    <hr class="mg-b-40">
    <button class="btn btn-outline-dark" id="print_Button"  onclick="printDiv()">Print </button>
    <a class="btn btn-move ml-2" href="{{route('get.verify')}} ">Next</a>
   </div>

</div>




@endsection

@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

<script type="text/javascript">
    function printDiv() {
        var printContents = document.getElementById('print').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
       document.body.innerHTML = originalContents;
       location.reload();
    }
</script>
@endsection
