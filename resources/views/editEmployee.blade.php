<x-layout>

    <div class="container mt-5">
        <div class="card">

            <div class="card-body">
                <h2 class="card-title text-center mb-4"> تعديل بيانات  {{ $employee->firstName }} {{ $employee->lastName }}</h2>
                <form action="/Employees/{{ $employee->id }}/edit" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label for="workId" class="form-label">رقم الموظف</label>
                        <input type="text" class="form-control" id="workId" name="workId" placeholder="ادخل رقم العمل" required value = "{{$employee->workId}}">
                        @error('workId')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="firstName" class="form-label">الاسم الأول</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="ادخل الاسم الأول" required value = "{{$employee->firstName}}">
                        @error('firstName')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="firstName" class="form-label">الاسم الأوسط</label>
                        <input type="text" class="form-control" id="firstName" name="middleName" placeholder="ادخل الاسم الأوسط" required value = "{{$employee->middleName}}">
                        @error('firstName')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="lastName" class="form-label">اسم العائلة</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="ادخل اسم العائلة" required value = "{{$employee->lastName}}">
                        @error('lastName')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ادخل البريد الإلكتروني" required value = "{{$employee->email}}">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phoneNo" class="form-label">رقم الهاتف</label>
                        <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="ادخل رقم الهاتف" required value = "{{$employee->phoneNo}}">
                        @error('phoneNo')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">المنصب</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="ادخل الوظيفة" required value = "{{$employee->position}}">
                        @error('position')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sector" class="form-label">القسم</label>
                        <input type="text" class="form-control" id="sector" name="sector" placeholder="ادخل القطاع" required value = "{{$employee->sector}}">
                        @error('sector')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nationalId" class="form-label">رقم الهوية الوطنية</label>
                        <input type="text" class="form-control" id="nationalId" name="nationalId" placeholder="ادخل رقم الهوية الوطنية" required value = "{{$employee->nationalId}}">
                        @error('nationalId')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="joined" class="form-label">تاريخ الانضمام</label>
                        <input type="date" class="form-control" id="joined" name="joined" required value = "{{$employee->joined}}">
                        @error('joined')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="dateOfBirth" class="form-label">تاريخ الميلاد</label>
                        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required value = "{{$employee->dateOfBirth}}">
                        @error('dateOfBirth')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" name="submit" class="btn btn-success w-100">تحديث المعلومات</button>
                        <a href="/Employees/{{ $employee->id }}" class="btn btn-danger w-100 mt-5">إلغاء</a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-layout>