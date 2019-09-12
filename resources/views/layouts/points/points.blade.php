@extends('layouts.master')

@section('content')
<div class="">
	<div class="col3">
		<div class="top-nav">
			<div class="form-search">
				<form class="form-group">
					<input type="text" name="" placeholder="Tìm sv (mã/tên)" class="form-control" id="search-live">
				</form>				
			</div>
			<div class="sort">
				<button type="" class="btn btn-warning"><i class="fa fa-sort" aria-hidden="true"></i></button>	
			</div>
		</div>
		<div class="bot-nav">
			<div class="it">
				<a>Quan Ly SV</a>
			</div>
			<div class="it">
				<a>Quan Ly Diem</a>
			</div>
			<div class="it">
				<a>Quan Ly Lop</a>
			</div>
			<div class="it">
				<a>Khac</a>
			</div>								
		</div>
	</div>
	<div class="col9">
		<div class="text-content">
			<strong>What is Lorem Ipsum?</strong>
			<br>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
		</div>
		<div class="text-content">
			<strong>Where does it come from?</strong>
			<br>
			Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.
		</div>
		<div class="text-content">
			<strong>Why do we use it?</strong>
			<br>
			It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
		</div>
		<div class="text-content">
			<strong>Where can I get some?</strong>
			<br>
			There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.as opposed to using 
		</div>
	</div>
</div>
@endsection