<x-layout>
        <div class="container">

            <h1 class="text-center m-5"> نظام إدارة إجازات الموظفين لشركة تحالف المالية</h1>
            <!-- here is the header where we will put the search bar and the login options -->
            <header>
                <div class="search-bar">
                    <label for="exampleDataList" class="form-label m-3">
                        <h1> إبحث عن موظف </h1>
                    </label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="إبحث...">
                    <datalist id="datalistOptions">
                        <option value="San Francisco">
                        <option value="New York">
                        <option value="Seattle">
                        <option value="Los Angeles">
                        <option value="Chicago">
                    </datalist>
                    <button class="btn btn-outline-success my-2" type="button">
                        <i class="fa fa-search"></i> Search
                    </button>
                    <div>

                    </div>
                </div>
            </header>

            <br>
            <br>
            <br>
            <!-- in this section we will put a table to preview employee and select them and edit them even with permession -->

            <section class="m-5">
                <div class="container mt-5 px-2">

                    <div class="table-responsive">
                        <table class="table table-responsive">
                            <thead>
                                <tr class="bg-dark text-white">
                                    <th scope="col" width="30%">رقم الموظف</th>
                                    <th scope="col" width="30%">اسم الموظف</th>
                                    <th scope="col" width="20%">عدد أيام الإجازة المتبقية</th>
                                    <th scope="col" width="10%">الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td><a href="Employees/{{ $employee->id }}"> {{$employee->workId}} </a></td>
                                    <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"><a href="http://leave-managment.test/profile" style="text-decoration: underline; color: black;">{{$employee->firstName}}</a></td>
                                    <td>15 يوماً</td>
                                    <td><span class="badge text-bg-success">كثير</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </section>

        </div>
</x-layout>