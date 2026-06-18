@endif
<form class="panel needs-validation" method="POST" action="{{ route('student.update', $student->id) }}" novalidate>
    @csrf
    <div class="panel-header">
        <div>
            <h2 class="h5 mb-1 section-title"><i class="bi bi-person-pluse" aria-hidden="true"></i>
                <span>Student Information</span>
            </h2>
            <p class="text-mute mb-0">Create a user account with validated fields</p>
        </div>
    </div>
</form>
