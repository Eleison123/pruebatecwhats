<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entry;


class BlogController extends Controller
{
     // Método para mostrar el listado de entradas
     public function index()
     {
         $entries = Entry::all();
         return view('entries.index', compact('entries'));
     }

    // Método para mostrar el formulario de alta de entradas
    public function create()
    {
        return view('entries.create');
    }

    // Método para guardar la entrada creada
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publication_date' => 'required',
            'content' => 'required',
        ]);

        // Crea una nueva entrada en la base de datos
        Entry::create($validatedData);

        return redirect()->route('entries.index');
    }

   

    // Método para realizar la búsqueda de entradas
    public function search(Request $request)
    {
        $search = $request->input('search');
        $searchResults = Entry::where('title', 'like', "%$search%")
            ->orWhere('content', 'like', "%$search%")
            ->orWhere('author', 'like', "%$search%")
            ->get();

        return view('entries.search', compact('searchResults'));
    }

    // Método para mostrar los detalles de una entrada
    public function show(Entry $entry)
    {
        return view('entries.show', compact('entry'));
    }

    public function getEntriesFromService()
    {
        $client = new Client();

        // URL del servicio REST
        $url = 'URL_SERVICIO';

        try {
            $response = $client->get($url);

            // Verifica el código de respuesta HTTP
            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody());

                // Procesa los datos y guárdalos en la base de datos si es necesario
                foreach ($data as $entryData) {
                    // Crea una nueva entrada en la base de datos
                    Entry::create([
                        'title' => $entryData->title,
                        'author' => $entryData->author,
                        'publication_date' => $entryData->publication_date,
                        'content' => $entryData->content,
                    ]);
                }

                return redirect()->route('entries.index')->with('success', 'Entradas importadas correctamente.');
            } else {
                return redirect()->route('entries.index')->with('error', 'Error al obtener los datos del servicio REST.');
            }
        } catch (\Exception $e) {
            return redirect()->route('entries.index')->with('error', 'Error al obtener los datos del servicio REST: ' . $e->getMessage());
        }
    }
}
