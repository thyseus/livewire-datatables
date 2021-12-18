@if ($this->hasSummaryRow())
    <div class="table-row p-1">
        @foreach($this->columns as $column)
            @if (!$column['hidden'])
                @if ($column['summary'])
                    <div class="table-cell px-6 py-2 whitespace-no-wrap @if($column['align'] === 'right') text-right @elseif($column['align'] === 'center') text-center @else text-left @endif {{ $this->cellClasses($row, $column) }}">
                        {{ $this->summarize($column['name']) }}
                    </div>
                @else
                    <div class="table-cell"></div>
                @endif
            @endif
        @endforeach
    </div>
@endif
