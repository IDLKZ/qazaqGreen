<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryDocumentRelRequest;
use App\Http\Requests\UpdateCategoryDocumentRelRequest;
use App\Repositories\CategoryDocumentRelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoryDocumentRelController extends AppBaseController
{
    /** @var  CategoryDocumentRelRepository */
    private $categoryDocumentRelRepository;

    public function __construct(CategoryDocumentRelRepository $categoryDocumentRelRepo)
    {
        $this->categoryDocumentRelRepository = $categoryDocumentRelRepo;
    }

    /**
     * Display a listing of the CategoryDocumentRel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categoryDocumentRels = $this->categoryDocumentRelRepository->all();

        return view('category_document_rels.index')
            ->with('categoryDocumentRels', $categoryDocumentRels);
    }

    /**
     * Show the form for creating a new CategoryDocumentRel.
     *
     * @return Response
     */
    public function create()
    {
        return view('category_document_rels.create');
    }

    /**
     * Store a newly created CategoryDocumentRel in storage.
     *
     * @param CreateCategoryDocumentRelRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryDocumentRelRequest $request)
    {
        $input = $request->all();

        $categoryDocumentRel = $this->categoryDocumentRelRepository->create($input);

        Flash::success('Category Document Rel saved successfully.');

        return redirect(route('categoryDocumentRels.index'));
    }

    /**
     * Display the specified CategoryDocumentRel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoryDocumentRel = $this->categoryDocumentRelRepository->find($id);

        if (empty($categoryDocumentRel)) {
            Flash::error('Category Document Rel not found');

            return redirect(route('categoryDocumentRels.index'));
        }

        return view('category_document_rels.show')->with('categoryDocumentRel', $categoryDocumentRel);
    }

    /**
     * Show the form for editing the specified CategoryDocumentRel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoryDocumentRel = $this->categoryDocumentRelRepository->find($id);

        if (empty($categoryDocumentRel)) {
            Flash::error('Category Document Rel not found');

            return redirect(route('categoryDocumentRels.index'));
        }

        return view('category_document_rels.edit')->with('categoryDocumentRel', $categoryDocumentRel);
    }

    /**
     * Update the specified CategoryDocumentRel in storage.
     *
     * @param int $id
     * @param UpdateCategoryDocumentRelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryDocumentRelRequest $request)
    {
        $categoryDocumentRel = $this->categoryDocumentRelRepository->find($id);

        if (empty($categoryDocumentRel)) {
            Flash::error('Category Document Rel not found');

            return redirect(route('categoryDocumentRels.index'));
        }

        $categoryDocumentRel = $this->categoryDocumentRelRepository->update($request->all(), $id);

        Flash::success('Category Document Rel updated successfully.');

        return redirect(route('categoryDocumentRels.index'));
    }

    /**
     * Remove the specified CategoryDocumentRel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoryDocumentRel = $this->categoryDocumentRelRepository->find($id);

        if (empty($categoryDocumentRel)) {
            Flash::error('Category Document Rel not found');

            return redirect(route('categoryDocumentRels.index'));
        }

        $this->categoryDocumentRelRepository->delete($id);

        Flash::success('Category Document Rel deleted successfully.');

        return redirect(route('categoryDocumentRels.index'));
    }
}
