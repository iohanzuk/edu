<?php


namespace App\Domain\Repositories;


use App\Domain\Models\Client;
use App\Domain\Models\CourseClass;
use Illuminate\Database\Eloquent\Builder;

class ClientRepository
{
    public function getClients(array $filter)
    {
        $courseId      = $filter['course_id'];
        $courseClassId = $filter['course_class_id'];
        $name  = $filter['course_class_id'];

        $builder = (new Client())->selectRaw(['clients.*']);

        $builder = $this->appendFilterByCourse($builder, $courseId);
        $builder = $this->appendFilterByCourseClass($builder, $courseClassId);
        $builder = $this->appendFilterByName($builder, $name);

        return $builder->get();
    }

    private function appendFilterByCourse(Builder $builder, $courseId): Builder
    {
        if (!$courseId)
            return $builder;

        return $builder->join('client_course_class')->on('client.id', '=', 'client_course_class.client_id')
            ->join('course_class')->on('course_class.id', '=', 'client_course_class.course_class_id')
            ->where('course_class.id', $courseId);

    }

    private function appendFilterByCourseClass(Builder $builder, $courseClassId): Builder
    {
        if (!$courseClassId)
            return $builder;

        return $builder->join('client_course_class')->on('client.id', '=', 'client_course_class.client_id')
            ->where('client_course_class.course_class_id', $courseClassId);
    }

    private function appendFilterByName(Builder $builder, $name): Builder
    {
        if(!$name)
            return $builder;

        return $builder->where('name', 'like', '%'.$name.'%');
    }
}