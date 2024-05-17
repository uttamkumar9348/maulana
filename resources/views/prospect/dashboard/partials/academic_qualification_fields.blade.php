<div class="row" id="remove-{{$key}}">
    <input type="hidden" name="qualification_id[]" value="">
    <div class="form-group col-md-1">
        <button type="button"  class="btn btn-sm btn-danger" onclick="removeFields('{{ @$key }}')">Remove</button>
    </div>
    <div class="form-group col-md-2">
        <!-- <input type="text" name="" class="form-control"  > -->
        <select name="name_of_exam[]" id="" class="form-control">
            <option value="">Select Exam</option>
            @foreach (App\Models\Passed_exam::all() as $exam)
            <option value="{{ $exam->id }}">{{ $exam->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2">
        <!-- <input type="text" name="" class="form-control"  > -->
        <select name="name_of_board[]" id="" class="form-control" >
            <option value="">Select Board</option>
            @foreach (App\Models\Board::all() as $board)
            <option value="{{ $board->id }}">{{ $board->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2">
        <input type="text" name="attended_school[]" class="form-control"  >
    </div>
    <div class="form-group col-md-1">
        <input type="text" name="passing_year[]" class="form-control"  >
    </div>
    <div class="form-group col-md-1">
        <input type="text" name="total_marks[]" class="form-control" value="0" >

    </div>
    <div class="form-group col-md-1">
        <input type="text" name="marks[]" class="form-control"  >
    </div>
    <div class="form-group col-md-1">
        <input type="text" name="percentage[]" class="form-control"  value="">
    </div>
</div>