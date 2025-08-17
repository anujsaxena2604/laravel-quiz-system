<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Quiz Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar  name={{$name}} ></x-navbar>

    <div class="bg-gray-100 flex flex-col items-center pt-5"> 
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        @if(!session('quizDetails'))
        <h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>
        <form action="/add-quiz" method="get" class="space-y-4">
            
            <div>
             <input type="text" placeholder="Enter Quiz name"  name="quiz" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
             <select type="text" name="category_id" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
                    @foreach ($categories as $category)
                    <option value={{ $category->id}}>{{ $category->name }}</option>
                                            
                    @endforeach
             </select>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white hover:bg-blue-600">Add</button>


    </form>
    @else
    <span class="text-green-500 font-bold">Quiz : {{ session('quizDetails')->name }}</span>
    <h2 class="text-2xl text-center text-gray-800 mb-6">Add MCQ`s</h2>
    <form action="add-mcq" method="post" class="space-y-4">
        @csrf
    <div>
        <textarea type="text" placeholder="Enter Your Question"  name="question" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
    </div>
    <div>
        <input type="text" placeholder="Enter First Option"  name="a" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
    <div>
        <input type="text" placeholder="Enter Second Option"  name="b" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
    <div>
        <input type="text" placeholder="Enter Third Option"  name="c" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
    <div>
        <input type="text" placeholder="Enter Fourth Option"  name="d" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>
        <div>
        <select name="correct_ans" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
            <option>Select Right Answer</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
        </select>
    </div>
    <button type="submit" name="submit" value="add-more"
                class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white hover:bg-blue-600">Add More</button>
        <button type="submit"   name="submit" value="done"
                class="w-full bg-green-500 rounded-xl px-4 py-2 text-white hover:bg-blue-600">Add and Submit</button>
</form>            
@endif
</div>
</div>
</body>
</html>