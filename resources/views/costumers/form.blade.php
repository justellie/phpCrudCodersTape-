<label for="name">Name</label>
            <div class="form-group ">
                <input type="text" name="name" value="{{old('name')?? $costumer->name}}" class="form-control">
                <div>{{$errors->first('name')}}</div>
            </div>
            <label for="email">Email</label>
            <div class="form-group">
                <input type="text" name="email" value="{{old('email') ?? $costumer->email}}" class="form-control">
                <div>{{$errors->first('email')}}</div>

            </div>

            <div class="form-group">
                <label for="active">Status</label>
                <select name="active" id="active" class="form-control" value="{{$costumer->active}}">
                    <option value="" disabled>Select customer status</option>
                    
                    @foreach($costumer->activeOptions() as $activeOptionKey=>$activeOptionValue)
                        <option value="{{$activeOptionKey}}" {{$costumer->active=='Active' ? 'selected':''}}>{{$activeOptionValue}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="company_id">Company</label>
                <select name="company_id" id="company_id" class="form-control" value="{{$costumer->company->name}}">
                    @foreach ($companies as $company)
                    <option value="{{$company->id}}" {{$company->id==$costumer->company_id ? 'selected':''}}>{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
            @csrf
