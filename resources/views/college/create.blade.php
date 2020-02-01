@extends('layouts.app')

@section('content')
    <section class="hero is-info is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns is-centered">
                    <div class="column is-8">
                        <h1 class="title">
                            Add your college to {{ env('APP_NAME') }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-8">
                <section class="section">
                    <form action="{{ route('college.create') }}" method="post">

                        {{ csrf_field() }}

                        <div class="field">
                            <div class="control">
                                <label for="name">College Name</label>
                                <input type="text" class="input" id="name" name="name" required>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column is-4">
                                <div class="field">
                                    <div class="control">
                                        <label for="state">State</label>
                                        <div class="select is-fullwidth">
                                            <select name="state" id="state">
                                                <option value="0" selected disabled>Select State</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                                <option value="National Capital Territory of Delhi">National Capital Territory of Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Ladakh">Ladakh</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-8">
                                <div class="field">
                                    <div class="control">
                                        <label for="town">City/Town Name</label>
                                        <input type="text" class="input" id="town" name="town">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field has-margin-2">
                            <div class="control">
                                <input type="submit" value="Submit" class="button is-primary is-fullwidth">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
