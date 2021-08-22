<?php
class lift_Social_Widget extends WP_Widget {
	// TODO: We working on this one now
    function __construct() {
 
        parent::__construct(
            'lift-social-widget',  // Base ID
            'LIFT Social Widget'   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'lift_Social_Widget' );
        });
 
    }
 
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        echo '<ul class="socialwidget">';
        // echo esc_html__( $instance['select'], 'wp-lift-theme' );
        echo '</ul>';
        echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'wp-lift-theme' );
        $select = ! empty( $instance['select'] ) ? $instance['select'] : esc_html__( '', 'wp-lift-theme' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'wp-lift-theme' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Select' ) ); ?>"><?php echo esc_html__( 'Select:', 'wp-lift-theme' ); ?></label>
            <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'select' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'select' ) ); ?>"><?php echo esc_attr( $select ); ?></select>
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['select'] = ( !empty( $new_instance['select'] ) ) ? $new_instance['select'] : '';
 
        return $instance;
    }
 
}
?>