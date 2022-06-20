<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;

class MessageController extends Controller
{
    public function showAll()
    {
        $messages = Message::all()->sortByDesc('created_at');

        return view('home', ['messages' => $messages]);
    }
}
    //  
//     public function create(Request $request)
//     {   
//         //TO MAKE IT REQUIRED
//         $request->validate([
//             'title'=>'required | min:4',
//             'content'=>'required | min:4'
//               ]);

//         // we create a new Message-Object
//         $message = new Message();
//         // we set the properties title and content
//         // with the values that we got in the post-request
//         $message->title = $request->title;
//         $message->content = $request->content;

//         // we save the new Message-Object in the messages
//         // table in our database
//         $message->save();

//         // at the end we make a redirect to the url /messages
//         return redirect('/messages');
//     }

//     // public function details($id)
//     // {
//     //     $message = Message::findOrFail($id);
//     //     return view('messageDetails', ['message' => $message]);
//     // }

    
//     public function delete($id)
//     {
//         $result = Message::findOrFail($id)->delete();

//         return redirect('/messages');
//     }

//     public function editData($id)
//     {
//         $message= Message ::find($id);
//         return view('messageDetails',['message' => $message]);
//     }

//     public function update(Request $request, $id) {
 
//         $request->validate([
//             'title' => 'required',
//             'content' => 'required'
//         ]);
  
//         $data = Message::findOrFail($id);
//         $data->title = $request->title;
//         $data->content = $request->content;
//         $data->save();
  
//         return redirect('/details{id}');
//    }

// }



































