@extends('client.masterpage.masterpage_index')
@section('content')
    <div class="container" id="test">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="col-md">
                            <label for="">
                                First Name
                            </label>
                            <input type="text" v-model="employee.fname" name="" class="form-control"
                                id="">
                        </div>
                        <div class="col-md mt-2">
                            <label for="">
                                Last Name
                            </label>
                            <input type="text" v-model="employee.lname" name="" class="form-control"
                                id="">
                        </div>
                        <div class="col-md mt-2">
                            <label for="">
                                Age
                            </label>
                            <input type="text" v-model="employee.age" name="" class="form-control" id="">
                        </div>
                        <div class="col-md mt-2">
                            <label for="">
                                Salary
                            </label>
                            <input type="text" v-model="employee.salary" name="" class="form-control"
                                id="">
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="button btn btn-success" v-on:click="addData()">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <td>#</td>
                                <td>First Name</td>
                                <td>Last Name</td>
                                <td>Age</td>
                                <td>Salary</td>
                            </thead>
                            <tbody>
                                <template v-for="(v,k) in list_emp">
                                    <tr>
                                        <td class="text-center align-middle">@{{ k + 1 }}</td>
                                        <td class="text-center align-middle">@{{ v.fname }}</td>
                                        <td class="text-center align-middle">@{{ v.lname }}</td>
                                        <td class="text-center align-middle">@{{ v.age }}</td>
                                        <td class="text-center align-middle">@{{ v.salary }}</td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
