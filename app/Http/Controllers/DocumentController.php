<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\CategoryDocumentRel;
use App\Models\PositionTeam;
use App\Repositories\DocumentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DocumentController extends AppBaseController
{
    /** @var  DocumentRepository */
    private $documentRepository;

    public function __construct(DocumentRepository $documentRepo)
    {
        $this->documentRepository = $documentRepo;
    }

    /**
     * Display a listing of the Document.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $documents = $this->documentRepository->all();

        return view('documents.index')
            ->with('documents', $documents);
    }

    /**
     * Show the form for creating a new Document.
     *
     * @return Response
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created Document in storage.
     *
     * @param CreateDocumentRequest $request
     *
     * @return Response
     */
    public function store(CreateDocumentRequest $request)
    {
        $input = $request->all();
        $document = $this->documentRepository->create($input);
        $document->uploadFile($request["file_kz"],"file_kz");
        $document->uploadFile($request["file_ru"],"file_ru");
        $document->uploadFile($request["file_en"],"file_en");
        if($request->get("category")){if($document->categoryDocuments){foreach ($document->categoryDocuments as $docs){$docs->delete();}}foreach ($request->get("category") as $category){CategoryDocumentRel::add(["category_id"=>$category,"document_id"=>$document->id]);}}

        Flash::success('Документ успешно сохранен.');

        return redirect(route('documents.index'));
    }

    /**
     * Display the specified Document.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $document = $this->documentRepository->find($id);

        if (empty($document)) {
            Flash::error('Документ не найден');

            return redirect(route('documents.index'));
        }

        return view('documents.show')->with('document', $document);
    }

    /**
     * Show the form for editing the specified Document.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $document = $this->documentRepository->find($id);

        if (empty($document)) {
            Flash::error('Документ не найден');

            return redirect(route('documents.index'));
        }

        return view('documents.edit')->with('document', $document);
    }

    /**
     * Update the specified Document in storage.
     *
     * @param int $id
     * @param UpdateDocumentRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title_ru' => 'required|string|max:255',
            'title_kz' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'file_ru' => 'sometimes|file|max:100000',
            'file_kz' => 'sometimes|file|max:100000',
            'file_en' => 'sometimes|file|max:100000',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ]);
        $document = $this->documentRepository->find($id);

        if (empty($document)) {
            Flash::error('Документ не найден');

            return redirect(route('documents.index'));
        }

        $document = $this->documentRepository->update($request->all(), $id);
        if ($request['file_ru']){
            $document->uploadFile($request["file_ru"],"file_ru");
        }
        if ($request['file_kz']){
            $document->uploadFile($request["file_kz"],"file_kz");
        }
        if ($request['file_en']){
            $document->uploadFile($request["file_en"],"file_en");
        }

        if($request->get("category")){if($document->categoryDocuments){foreach ($document->categoryDocuments as $docs){$docs->delete();}}foreach ($request->get("category") as $category){CategoryDocumentRel::add(["category_id"=>$category,"document_id"=>$document->id]);}}


        Flash::success('Документ обновлен');

        return redirect(route('documents.index'));
    }

    /**
     * Remove the specified Document from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $document = $this->documentRepository->find($id);

        if (empty($document)) {
            Flash::error('Документ не найден');

            return redirect(route('documents.index'));
        }

        $this->documentRepository->delete($id);

        Flash::success('Документ удален');

        return redirect(route('documents.index'));
    }
}
