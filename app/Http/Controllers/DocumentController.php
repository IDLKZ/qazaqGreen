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
        $document->uploadFile($request["file"],"file");
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
    public function update($id, UpdateDocumentRequest $request)
    {
        $document = $this->documentRepository->find($id);

        if (empty($document)) {
            Flash::error('Документ не найден');

            return redirect(route('documents.index'));
        }

        $document = $this->documentRepository->update($request->all(), $id);
        $document->uploadFile($request["file"],"file");
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
