@extends('backend.master')



@push('content')
    <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-12 py-4">
            <div class="page-heading">
                <div class="page-heading-copy">
                    <span class="page-icon"><i class="bi bi-person-plus" aria-hidden="true"></i></span>
                    <div>
                        <p class="eyebrow mb-1">Management</p>

                        <p class="text-muted mb-0">Create a new user account with role and team assignments.</p>
                    </div>
                </div>
                <div class="heading-actions"><a class="btn btn-outline-secondary btn-sm" href="{{ url('/students') }}"><i
                            class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users</a></div>
            </div>

            <section class="row g-3">
                <div class="col-12 col-lg-12">
                    @if ($errors->any())
                        <div class="altert altert-danger">
                            <h3>Whoops, There were some problems with your input.</h3>
                            <ul>
                                @foreach ($errors as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="panel needs-validation" method="post" action="{{ route('student.store') }}" novalidate>
                        @csrf
                        <div class="panel-header">
                            <div>
                                <h2 class="h5 mb-1 section-title"><i class="bi bi-person-plus"
                                        aria-hidden="true"></i><span>Student Information</span></h2>
                                <p class="text-muted mb-0">Create a user account with validated fields.</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label" for="firstName">First name</label><input
                                    class="form-control" id="firstName" type="text" required>
                                <div class="invalid-feedback">First name is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="lastName">Last name</label><input
                                    class="form-control" id="lastName" type="text" required>
                                <div class="invalid-feedback">Last name is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="email">Email</label><input
                                    class="form-control" id="email" type="email" required>
                                <div class="invalid-feedback">Enter a valid email.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="phone">Phone</label><input
                                    class="form-control" id="phone" type="tel" required>
                                <div class="invalid-feedback">Phone number is required.</div>
                            </div>
                            <div class="col-md-6"><label class="form-label" for="role">District</label><select
                                    class="form-select" id="role" required>
                                    <option value="">Choose a District </option>
                                    <option value="1" {{old('district')==1 ? 'selected'}}>Rangpur</option>
                                    <option value="2">Shylet</option>
                                    <option value="3">Khulna</option>
                                    <option value="4">Barishal</option>
                                </select>
                                <div class="invalid-feedback">Choose a role.</div>
                            </div>
                            <div class="col-md-6 ">
                                <label class="form-label d-block" for="subject">Subject</label>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="php" id="phpCheck">
                                    <label class="form-check-label" for="phpCheck">
                                        JavaScript
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="php" id="phpCheck">
                                    <label class="form-check-label" for="phpCheck">
                                        PHP
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="laravel" id="laravelCheck">
                                    <label class="form-check-label" for="laravelCheck">
                                        Laravel
                                    </label>
                                </div>

                            </div>
                            <div class="invalid-feedback">Choose a team.</div>
                        </div>
                        <div class="col-12"><label class="form-label" for="notes">Address</label>
                            <textarea class="form-control" id="notes" rows="4" placeholder="Optional onboarding notes"></textarea>
                        </div>
                </div>
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary"
                        href="users.html">Cancel</a><button class="btn btn-primary" type="submit"><i
                            class="bi bi-person-check" aria-hidden="true"></i> Create User</button></div>
                </form>
        </div>

        </section>
        </div>
    </main>
@endpush
