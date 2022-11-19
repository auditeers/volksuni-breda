@extends(backpack_view('blank'))

@php

$studentCount = App\Models\Student::count();

/*
Widget::add()->to('before_content')->type('div')->class('row')->content([
    Widget::make()
    ->type('progress')
    ->class('card border-0 text-white bg-primary')
    ->progressClass('progress-bar')
    ->value(number_format($studentCount, 0, ',', '.'))
    ->description('Cursisten')
    ->progress(100*(int)$studentCount/1000),
]);
*/

$new_courses = App\Models\Course::OrderBy('created_at', 'DESC')->take(8)->get();

$new_courses_table = "<table class='table table-striped table-sm'";
foreach($new_courses as $course) {

    $new_badge = ($course->image == "default-cursus.png") ? ' <span class="badge badge-warning">Nieuw</span>' : '';


    $new_courses_table .= "
    <tr>
        <td><small><a href='/management/course/{$course->id}/edit'>{$course->title} {$new_badge}</a></small></td>
        <td><small>" . date('d-m-Y', strtotime($course->created_at)) . "</small></td>
    </tr>";
}
$new_courses_table .= "</table>";

$new_orders = App\Models\OrderItem::OrderBy('created_at', 'DESC')->take(8)->get();

$new_orders_table = "<table class='table table-striped table-sm'";
foreach($new_orders as $order) {

    $paid_badge = !empty($order->order->paid) ? 'success' : 'warning';

    $new_orders_table .= " <tr>
    <td><small><a href='/management/order/{$order->order_id}/edit'>{$order->student_name}</a></small></td>
    <td><small>{$order->course->title}</small></td>
    <td><small>" . date('d-m-Y', strtotime($order->program->start)) . "</small></td>
    <td><small><span class='badge badge-" . $paid_badge . "'>&euro;" . number_format($order->price, 2, ",", "") . "</span></small></td>
    <td><small>" . date('d-m-Y H:i', strtotime($order->created_at)) . "</small></td>
    </tr>";
}
$new_orders_table .= "</table>";


Widget::add()->to('before_content')->type('div')->class('row')->content([
    /*
    Widget::make()
    ->type('alert')
    ->class('alert alert-warning border-0 mb-4')
    ->wrapper(['class'=> 'col-md-12'])
    ->heading('Beta omgeving Volksuniversiteit Breda')
    ->content('Dit is de beta omgeving van volksuniversiteit Breda. Dit dashboard is nog onder ontwikkeling'),
    */
    Widget::make()
    ->type('chart')
    ->class('card mb-2')
    ->wrapper(['class'=> 'col-md-6'])
    ->controller(\App\Http\Controllers\Admin\Charts\NewUsersChartController::class)
    ->content([
        'header' => 'Nieuwe Cursisten',
        // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>',
    ]),
    Widget::make()
        ->type('chart')
        ->class('card mb-2')
        ->wrapper(['class'=> 'col-md-6'])
        ->controller(\App\Http\Controllers\Admin\Charts\NewEnrollmentsChartController::class)
        ->content([
            'header' => 'Nieuwe Inschrijvingen',
            // 'body' => 'This chart should make it obvious how many new users have signed up in the past 7 days.<br><br>',
    ]),
    Widget::make()
        ->type('card')
        ->class('card mb-2')
        ->wrapper(['class'=> 'col-md-12'])
        // ->controller(\App\Http\Controllers\Admin\Charts\NewEnrollmentsChartController::class)
        ->content([
            'header' => 'Laatste Inschrijvingen',
            'body' => $new_orders_table,
    ]),
    Widget::make()
        ->type('card')
        ->class('card mb-2')
        ->wrapper(['class'=> 'col-md-6'])
        // ->controller(\App\Http\Controllers\Admin\Charts\NewEnrollmentsChartController::class)
        ->content([
            'header' => 'Nieuwe Cursussen uit sync',
            'body' => $new_courses_table,
    ]),



]);

    
@endphp


@section('content')

{{-- In case widgets have been added to a 'content' group, show those widgets. --}}
@include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('group', 'content')->toArray() ])

@endsection