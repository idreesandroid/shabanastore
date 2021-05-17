/*price range*/

if ($.fn.slider) {
    $('#sl2').slider();
}

var RGBChange = function () {
    $('#RGB').css('background', 'rgb(' + r.getValue() + ',' + g.getValue() + ',' + b.getValue() + ')')
};

/*scroll to top*/
if($("#scrollUp").html()){
    
$(document).ready(function () {
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            scrollDistance: 300, // Distance from top/bottom before showing element (px)
            scrollFrom: 'top', // 'top' or 'bottom'
            scrollSpeed: 300, // Speed back to top (ms)
            easingType: 'linear', // Scroll to top easing (see http://easings.net/)
            animation: 'fade', // Fade, slide, none
            animationSpeed: 200, // Animation in speed (ms)
            scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
            //scrollTarget: false, // Set a custom target element for scrolling to the top
            scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
            scrollTitle: false, // Set a custom <a> title if required.
            scrollImg: false, // Set true to use image
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            zIndex: 2147483647 // Z-Index for the overlay
        });
    });
});

}
// Initialize and add the map
function initMap() {
// The location of Uluru
    const uluru = { lat: 33.626057, lng: 73.071442 };
// The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 8,
        center: uluru,
    });
// The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}


$(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    $('#select2-purple').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });

    //Datemask dd/mm/yyyy
    if($('#datemask').html()){
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    }
    //Datemask2 mm/dd/yyyy
    if($('#datemask2').html()){
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    }
    //Money Euro
    if($('#datemask').html()){
        $('[data-mask]').inputmask();
    }
    //Date range picker
    if($('#reservationdate').html()){
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
    }
    //Date range picker
    if($('#reservation').html()){
        $('#reservation').daterangepicker();
    }
    //Date range picker with time picker
    if($('#reservationtime').html()){
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        });
    }
    //Date range as a button
    if($('#daterange-btn').html()){

        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )
    }

    //Timepicker
    if($('#timepicker').html()){        
        $('#timepicker').datetimepicker({
            format: 'LT'
        });
    }

    //Bootstrap Duallistbox
    if($('.duallistbox').html()){  
        $('.duallistbox').bootstrapDualListbox();
    }
    //Colorpicker
    if($('.duallistbox').html()){ 
        $('.my-colorpicker1').colorpicker();
    }
    //color picker with addon
    if($('.duallistbox').html()){ 
        $('.my-colorpicker2').colorpicker();
    }
    if($('.my-colorpicker2').html()){ 
        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });
    }
    if($('input[data-bootstrap-switch]').html()){ 
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
    }
})
// BS-Stepper Init
if($('.bs-stepper').html()){

    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'));
    });
}

// DropzoneJS Demo Code Start
Dropzone.autoDiscover = false;

// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
if($("#previewNode").html()){    
    var previewNode = document.querySelector("#template");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);
}
if($("#previews").html()){ 
var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
});

myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
});

// Update the total progress bar
myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
});

myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1";
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
});

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0";
});

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
};
document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true);
};
// DropzoneJS Demo Code End


}

$(document).ready(function() {
            $("#createPost").on('click',function(){
                alert('title');

            var title = $("#post_title").val();
            if(!title.length){
                $("#post_title").focus();
                alert('Please insert the title');
                return false;
            }
            var post_description = $("#post_description").val();
            if(!post_description.length){
                $("#post_description").focus();
                alert('Please emter post description');
                return false;
            }
            var json_data = {
                'title' : title,
                'description' : post_description,
                '_token' : "{{ csrf_token() }}"
            };
            $.ajax({
                url : "{{ route('store.blog') }}",
                type: "POST",
                data: json_data,
                success : function(data) {
                    if(data){
                        $("#title").val("");
                        $("#selectedVendorsInAddModel").val("");
                        $("#add_MapData").val("");
                        $("#addStatus").val("");
                        $("#addCollectionModel .close").click();
                        Swal.fire('Collection Area created', 'You clicked the button!','success').then((result) => {
                            if(result.isConfirmed) {
                                location.reload(true);
                            }
                        });
                    }
                },
                error: function(){
                    swal.fire("Error Completion Task!", "Error in Create Collection Area error", "error").then((result) => {
                        if(result.isConfirmed) {
                            location.reload(true);
                        }
                    });
                }
            });
        });
    });

$("#blogPostTable").dataTable();