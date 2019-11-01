<Style>
.alert-message .alert-icon {
width: 4rem;
font-size: 1.5rem;
}
.alert-message .close{
font-size: 1rem;
color: #a6a6a6;
}
</style>
<!-- HTML -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="alert alert-danger alert-message d-flex rounded p-0" role="alert">
    <div class="alert-icon d-flex justify-content-center align-items-center flex-grow-0 flex-shrink-0 py-3">
        <i class="fas fa-bullhorn"></i>
    </div>
    <div class="d-flex align-items-center py-2 pr-1">
        invalid login or password
    </div>
    <a href="#" class="close d-flex ml-auto justify-content-center align-items-center px-3" data-dismiss="alert">
        <i class="fas fa-times"></i>
    </a>
</div>
