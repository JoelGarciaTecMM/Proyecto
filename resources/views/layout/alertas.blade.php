<div class="position-fixed bottom-1 end-1 z-index-2">
    <div class="toast fade hide p-2 bg-white" id="successToast" role="alert" aria-live="assertive"  aria-atomic="true">
        <div class="toast-header border-0 bg-white">
        <i class="material-icons text-success me-2">
        check
        </i>
        <span class="me-auto font-weight-bold" id= "success-head">Material Dashboard </span>
        <small class="text-body"></small>
        <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close">
        </i>
        </div>
        <hr class="horizontal dark m-0">
        <div class="toast-body" id = "success-body">
        Hello, world! This is a notification message.
        </div>
    </div>
</div>


<div class="position-fixed bottom-1 end-1 z-index-2">
    <div class="toast fade hide p-2 mt-2 bg-gradient-info" role="alert" aria-live="assertive" id="infoToast" aria-atomic="true">
        <div class="toast-header bg-transparent border-0">
        <i class="material-icons text-white me-2">
    notifications
    </i>
        <span class="me-auto text-white font-weight-bold" id= "info-head">Material Dashboard </span>
        <small class="text-white"></small>
        <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close">
        </i>
        </div>
        <hr class="horizontal light m-0">
        <div class="toast-body text-white" id = "info-body">
        Hello, world! This is a notification message.
        </div>
    </div>
</div>


<div class="position-fixed bottom-1 end-1 z-index-2">
    <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="warningToast" aria-atomic="true">
        <div class="toast-header border-0">
        <i class="material-icons text-warning me-2">
    travel_explore
    </i>
        <span class="me-auto font-weight-bold" id= "warning-head">Material Dashboard </span>
        <small class="text-body"></small>
        <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close">
        </i>
        </div>
        <hr class="horizontal dark m-0">
        <div class="toast-body" id = "warning-body">
        Hello, world! This is a notification message.
        </div>
    </div>
</div>


<div class="position-fixed bottom-1 end-1 z-index-2">
    <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="dangerToast" aria-atomic="true">
        <div class="toast-header border-0">
        <i class="material-icons text-danger me-2">
    campaign
    </i>
        <span class="me-auto text-gradient text-danger font-weight-bold" id= "danger-head">Material Dashboard </span>
        <small class="text-body"></small>
        <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close">
        </i>
        </div>
        <hr class="horizontal dark m-0">
        <div class="toast-body" id = "danger-body">
        Hello, world! This is a notification message.
        </div>
    </div>
</div>

<script>


function alertsuccess(head,body){
    if ( typeof head !== 'undefined') document.getElementById('success-head').innerHTML = head;
    if ( typeof body !== 'undefined') document.getElementById('success-body').innerHTML = body;
    $('#successToast').toast('show');
}

function alertinfo(head,body){
    if ( typeof head !== 'undefined') document.getElementById('info-head').innerHTML = head;
    if ( typeof body !== 'undefined') document.getElementById('info-body').innerHTML = body;
    $('#infoToast').toast('show');
}

function alertwarning(head,body){
    if ( typeof head !== 'undefined') document.getElementById('warning-head').innerHTML = head;
    if ( typeof body !== 'undefined') document.getElementById('warning-body').innerHTML = body;
    $('#warningToast').toast('show');
}

function alertdanger(head,body){
    if ( typeof head !== 'undefined') document.getElementById('danger-head').innerHTML = head;
    if ( typeof body !== 'undefined') document.getElementById('danger-body').innerHTML = body;
    $('#dangerToast').toast('show');
}



</script>