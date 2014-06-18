<?php

class FrogController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'postOnly + create', // we only allow deletion via POST request
            'putOnly + update',
            'deleteOnly + delete'
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
        $this->sendAjaxResponse($this->loadModel($id));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Frog;
        $model->attributes = $_POST;
        $result = $model->save();

        $this->sendAjaxResponse($model);
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        $model->attributes = Yii::app()->getRequest()->getRestParams();
        $model->save();

        $this->sendAjaxResponse($model);
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
        $model = $this->loadModel($id);
        $model->delete();
        $this->sendAjaxResponse($model);
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $dataProvider=new ActiveDataProvider('Frog');
        $this->sendAjaxResponse($dataProvider);
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Frog('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Frog']))
			$model->attributes=$_GET['Frog'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Frog the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Frog::model()->findByPk($id);
		if($model===null) {
			$this->sendAjaxResponse(new NotFoundException());
        }
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Frog $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='frog-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
