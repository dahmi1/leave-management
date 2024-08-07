<x-layout>



    <div class="container d-flex justify-content-between w-100">

        <!-- here in this section we will show the profile of the employee -->
        <section class="col-md-4">


            <div class="container mt-4">
                <div class="card">
                    <img src="https://i.imgur.com/VKOeFyS.png" class="card-img-top rounded-circle mx-auto mt-3" alt="Profile Picture" style="width: 150px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $employee->firstName }} {{ $employee->lastName }}</h5>
                        <hr>
                        <p class="card-text"> <strong>الرقم الوظيفي:</strong> {{ $employee->workId }}</p>
                        <p class="card-text"><strong>العمر:</strong> 30 سنة</p>
                        <p class="card-text"><strong>البريد الإلكتروني: </strong><a href="{{ $employee->email }}"> {{ $employee->email }}</a></p>
                        <p class="card-text"><strong>الهاتف:</strong> {{$employee->phoneNo}}</p>
                        <p class="card-text"> <strong>القسم: </strong> {{ $employee->sector }}</p>
                        <p class="card-text"> <strong>المنصب: </strong> {{ $employee->position }}</p>
                        <p class="card-text"> <strong>العمر: </strong> {{ $employee->joined }}</p>
                        <p class="card-text"> <strong>رقم الهوية: </strong> {{ $employee->nationalId }}</p>
                        <p class="card-text"> <strong>تاريخ الإنضمام: </strong> {{ $employee->joined }}</p>
                        </p>
                    </div>
                    <div class="text-center">
                        <a href="adminPage.html">
                            <button class="btn btn-success my-2" type="button">
                                <i class="fa fa-add"></i> إضافة إجازة
                            </button>
                        </a>
                        <br>

                        <a href="/Employees/{{$employee->id}}/edit">
                            <button class="btn btn-primary my-2" type="button">
                                <i class="fa fa-add"></i> تعديل على معلومات الموظف
                            </button>
                        </a>

                        <div>
                            <form method="POST" action="/Employees/{{ $employee->id }}" id="deleteForm" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        <button form="deleteForm" class="btn btn-danger my-2">
                            <i class="fa fa-add"></i> حذف الموظف
                        </button>
 
                        </div>
                        <br>
                       <br>
                        <a href="/">
                            <button class="btn btn-warning my-2" type="button">
                                <i class="fa fa-add"></i> الرجوع للصفحة الرئيسية
                            </button>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <section class="col-md-8 mx-5">

            <!-- in this section we will put real time counters for employee vications and what left from them  -->
            <section class="row-md-4 h-25 my-5">
                <h1 class="text-center my-5 fw-bold">الأيام</h1>

                <div class="containter d-flex justify-content-around text-center ">
                    <div class="col-md-4">
                        <h1 class="fw-medium">تاريخ الالتحاق</h1>
                        <h2 class="fw-normal">{{$employee->joined}}</h2>
                    </div>
                    <div class="col-md-4">
                        <h1 class="fw-medium">الاجازة المستحقة</h1>
                        <h2 class="fw-normal">21</h2>
                    </div>
                    <div class="col-md-4">
                        <h1 class="fw-medium">المتبقي</h1>
                        <h2 class="fw-normal">19</h2>
                    </div>
                </div>
            </section>

            <!-- in this section we will put a table demonstrating the vacation record history by the employee -->
            <br>
            <br>
            <section class="row-md-8 h-75 my-5">
                <h1 class="text-center my-5">سجل الإجازات</h1>

                </thead>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>رقم الاجازة</th>
                            <th>تاريخ بدء الاجازة</th>
                            <th>تاريخ مباشرة العمل</th>
                            <th>تاريخ تقديم تقرير الاجازة</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>01/01/2020</td>
                            <td>30/01/2020</td>
                            <td>31/01/2020</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>15/02/2019</td>
                            <td>12/03/2019</td>
                            <td>13/03/2019</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>10/04/2021</td>
                            <td>29/04/2021</td>
                            <td>30/04/2021</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>05/06/2022</td>
                            <td>24/06/2022</td>
                            <td>25/06/2022</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>20/08/2018</td>
                            <td>18/09/2018</td>
                            <td>19/09/2018</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </div>


</x-layout>