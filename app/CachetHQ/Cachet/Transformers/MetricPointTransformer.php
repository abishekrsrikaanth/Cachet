<?php

namespace CachetHQ\Cachet\Transformers;

use League\Fractal\TransformerAbstract;
use MetricPoint;

class MetricPointTransformer extends TransformerAbstract
{

    public function transform(MetricPoint $metricPoint)
    {
        return [
            'id'         => (int) $metricPoint->id,
            'metric_id'  => $metricPoint->metric_id,
            'value'      => $metricPoint->value,
            'created_at' => $metricPoint->created_at->timestamp,
            'updated_at' => $metricPoint->updated_at->timestamp,
        ];
    }
}
