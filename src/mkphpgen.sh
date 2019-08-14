#!/usr/bin/env bash

##############################################################################################
# Requires the grpc_php_plugin, instructions here: https://grpc.io/docs/tutorials/basic/php/ #
# Note: after make, make install                                                             #
##############################################################################################

OUTDIR="../gen-php"
mkdir -p $OUTDIR

protoc -I ./ --php_out=$OUTDIR --grpc_out=$OUTDIR --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin opencensus/proto/stats/v1/stats.proto \
&& protoc -I ./ --php_out=$OUTDIR --grpc_out=$OUTDIR --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin opencensus/proto/metrics/v1/metrics.proto \
&& protoc -I ./ --php_out=$OUTDIR --grpc_out=$OUTDIR --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin opencensus/proto/resource/v1/resource.proto \
&& protoc -I ./ --php_out=$OUTDIR --grpc_out=$OUTDIR --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin opencensus/proto/trace/v1/trace.proto \
&& protoc -I ./ --php_out=$OUTDIR --grpc_out=$OUTDIR --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin opencensus/proto/trace/v1/trace_config.proto \
&& protoc -I ./ --php_out=$OUTDIR --grpc_out=$OUTDIR --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin opencensus/proto/agent/common/v1/common.proto \
&& protoc -I ./ --php_out=$OUTDIR --grpc_out=$OUTDIR --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin opencensus/proto/agent/metrics/v1/metrics_service.proto \
&& protoc -I ./ --php_out=$OUTDIR --grpc_out=$OUTDIR --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin opencensus/proto/agent/trace/v1/trace_service.proto 

