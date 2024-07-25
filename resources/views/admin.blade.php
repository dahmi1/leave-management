<x-layout>
    <div class="container mt-5">
        <section>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            إضافة طلب إجازة
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="employee">الرقم الوظيفي أو اسم الموظف:</label>
                                    <input type="text" class="form-control" id="employee" name="employee"
                                        placeholder="الرقم الوظيفي أو اسم الموظف" required>
                                </div>
                                <div class="form-group">
                                    <label for="start_date">بداية الاجازة:</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="end_date">نهاية الاجازة:</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" required>
                                </div>
                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</x-layout>