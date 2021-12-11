<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryDocumentRequest;
use App\Http\Requests\UpdateCategoryDocumentRequest;
use App\Repositories\CategoryDocumentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoryDocumentController extends AppBaseController
{
    /** @var  CategoryDocumentRepository */
    private $categoryDocumentRepository;

    public function __construct(CategoryDocumentRepository $categoryDocumentRepo)
    {
        $this->categoryDocumentRepository = $categoryDocumentRepo;
    }

    /**
     * Display a listing of the CategoryDocument.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categoryDocuments = $this->categoryDocumentRepository->all();

        return view('category_documents.index')
            ->with('categoryDocuments', $categoryDocuments);
    }

    /**
     * Show the form for creating a new CategoryDocument.
     *
     * @return Response
     */
    public function create()
    {
        return view('category_documents.create');
    }

    /**
     * Store a newly created CategoryDocument in storage.
     *
     * @param CreateCategoryDocumentRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryDocumentRequest $request)
    {
        $input = $request->all();

        $categoryDocument = $this->categoryDocumentRepository->create($input);

        Flash::success('Категория документов успешно сохранена.');

        return redirect(route('categoryDocuments.index'));
    }

    /**
     * Display the specified CategoryDocument.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoryDocument = $this->categoryDocumentRepository->find($id);

        if (empty($categoryDocument)) {
            Flash::error('Категория документов не найдена');

            return redirect(route('categoryDocuments.index'));
        }

        return view('category_documents.show')->with('categoryDocument', $categoryDocument);
    }

    /**
     * Show the form for editing the specified CategoryDocument.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoryDocument = $this->categoryDocumentRepository->find($id);

        if (empty($categoryDocument)) {
            Flash::error('Категория документов не найдена');

            return redirect(route('categoryDocuments.index'));
        }

        return view('category_documents.edit')->with('categoryDocument', $categoryDocument);
    }

    /**
     * Update the specified CategoryDocument in storage.
     *
     * @param int $id
     * @param UpdateCategoryDocumentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryDocumentRequest $request)
    {
        $categoryDocument = $this->categoryDocumentRepository->find($id);

        if (empty($categoryDocument)) {
            Flash::error('Категория документов не найдена');

            return redirect(route('categoryDocuments.index'));
        }

        $categoryDocument = $this->categoryDocumentRepository->update($request->all(), $id);

        Flash::success('Категория документов успешно обновлена.');

        return redirect(route('categoryDocuments.index'));
    }

    /**
     * Remove the specified CategoryDocument from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoryDocument = $this->categoryDocumentRepository->find($id);

        if (empty($categoryDocument)) {
            Flash::error('Категория документов не найдена');

            return redirect(route('categoryDocuments.index'));
        }

        $this->categoryDocumentRepository->delete($id);

        Flash::success('Категория успешно удалена.');

        return redirect(route('categoryDocuments.index'));
    }
}
